<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleTagRequest;
use App\Http\Requests\UpdateArticleTagRequest;
use App\Repositories\ArticleTagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArticleTagController extends AppBaseController
{
    /** @var  ArticleTagRepository */
    private $articleTagRepository;

    public function __construct(ArticleTagRepository $articleTagRepo)
    {
        $this->articleTagRepository = $articleTagRepo;
    }

    /**
     * Display a listing of the ArticleTag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articleTags = $this->articleTagRepository->all();

        return view('article_tags.index')
            ->with('articleTags', $articleTags);
    }

    /**
     * Show the form for creating a new ArticleTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_tags.create');
    }

    /**
     * Store a newly created ArticleTag in storage.
     *
     * @param CreateArticleTagRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleTagRequest $request)
    {
        $input = $request->all();

        $articleTag = $this->articleTagRepository->create($input);

        Flash::success('Article Tag saved successfully.');

        return redirect(route('articleTags.index'));
    }

    /**
     * Display the specified ArticleTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleTag = $this->articleTagRepository->find($id);

        if (empty($articleTag)) {
            Flash::error('Article Tag not found');

            return redirect(route('articleTags.index'));
        }

        return view('article_tags.show')->with('articleTag', $articleTag);
    }

    /**
     * Show the form for editing the specified ArticleTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleTag = $this->articleTagRepository->find($id);

        if (empty($articleTag)) {
            Flash::error('Article Tag not found');

            return redirect(route('articleTags.index'));
        }

        return view('article_tags.edit')->with('articleTag', $articleTag);
    }

    /**
     * Update the specified ArticleTag in storage.
     *
     * @param int $id
     * @param UpdateArticleTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleTagRequest $request)
    {
        $articleTag = $this->articleTagRepository->find($id);

        if (empty($articleTag)) {
            Flash::error('Article Tag not found');

            return redirect(route('articleTags.index'));
        }

        $articleTag = $this->articleTagRepository->update($request->all(), $id);

        Flash::success('Article Tag updated successfully.');

        return redirect(route('articleTags.index'));
    }

    /**
     * Remove the specified ArticleTag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleTag = $this->articleTagRepository->find($id);

        if (empty($articleTag)) {
            Flash::error('Article Tag not found');

            return redirect(route('articleTags.index'));
        }

        $this->articleTagRepository->delete($id);

        Flash::success('Article Tag deleted successfully.');

        return redirect(route('articleTags.index'));
    }
}
