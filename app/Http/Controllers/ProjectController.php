<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    public function index() {
        $projects = Project::orderBy( 'id', 'desc' )->get();
        $total = Project::count();
        return view( 'admin.project.index', compact( 'projects', 'total' ) );
    }
    //aman

    public function create() {
        return view( 'admin.project.create' );
    }
    //aman


    public function save( Request $request ) {
        $validation = $request->validate( [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ] );

        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move( public_path( 'images' ), $imageName );

        Project::create( [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName
        ] );

        $data = Project::create( $validation );
        if ( $data ) {
            session()->flash( 'success', 'Product Add Successfully' );
            return redirect( route( 'admin.project' ) );
        } else {
            session()->flash( 'error', 'Some problem occurred' );
            return redirect( route( 'admin.project.create' ) );
        }
    }
    
    public function edit( $id ) {
        $project = Project::findOrFail( $id );
        return view( 'admin.project.update', compact( 'project' ) );
    }// bisa tampil



    public function show( Project $project ) {
        return view( 'projects.show', [ 'project' => $project ] );
    }






    public function update( Request $request, Project $project ) {
        $request->validate( [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ] );

        if ( $request->hasFile( 'image' ) ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move( public_path( 'images' ), $imageName );
            $project->image = $imageName;
        }

        $project->name = $request->name;
        $project->save();

        return redirect()->route( 'projects.index' )->with( 'success', 'Project updated successfully.' );
    }

    // Menghapus project

    public function delete( $id ) {
        $project = Project::findOrFail( $id )->delete();
        if ( $project ) {
            session()->flash( 'success', 'Product Successfully Deleted' );
            return redirect( route( 'admin.products' ) );
        } else {
            session()->flash( 'error', 'Product Deletion Failed' );
            return redirect( route( 'admin.products' ) );
        }
    }
}
