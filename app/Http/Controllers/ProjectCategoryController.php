<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectCategoryRequest;
use App\Http\Requests\UpdateProjectCategoryRequest;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('project_categories_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project_category = ProjectCategory::all();

        return view('project_category.index', compact('project_category'));
    }

    public function create()
    {
        abort_if(Gate::denies('project_categories_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('project_category.create');
    }

    public function store(StoreProjectCategoryRequest $request)
    {

      
        ProjectCategory::create($request->validated());

        return redirect()->route('project-category.index');
    }

    public function show(ProjectCategory $project_category)
    {
        abort_if(Gate::denies('project_categories_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('project_category.show', compact('project_category'));
    }

    public function edit(ProjectCategory $project_category)
    {
        abort_if(Gate::denies('project_categories_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('project_category.edit', compact('project_category'));
    }

    public function update(UpdateProjectCategoryRequest $request, ProjectCategory $project_category)
    {

       $project_category->update($request->validated());

        return redirect()->route('project-category.index');
    }

    public function destroy(ProjectCategory $project_category)
    {
        abort_if(Gate::denies('project_categories_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project_category->delete();

        return redirect()->route('project-category.index');
    }
}
