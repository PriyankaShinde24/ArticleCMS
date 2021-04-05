<?php
namespace App\Http\Controllers;

use App\Http\Requests\CreateArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Repositories\ArticlesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Comment;
use App\Models\ArticleTag;
use App\Models\Tag;
use App\User;

class ArticlesController extends AppBaseController {

    /** @var  ArticlesRepository */
    private $articlesRepository;

    public function __construct(ArticlesRepository $articlesRepo) {
        $this->articlesRepository = $articlesRepo;
    }

    /**
     * Display a listing of the Articles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request) {
        
        $conditions = [];
        
        $input = $request->all();
        //dd($input);
        if (isset($input['searchText'])) {
            
            $conditions = ['LIKE' => ['title' => trim($input['searchText']), 'description' => trim($input['searchText'])]];
        }

        $articles = $this->articlesRepository->all($conditions, null, null, ['*']);

        return view('welcome')->with(compact('articles'));
    }

    /**
     * Show the form for creating a new Articles.
     *
     * @return Response
     */
    public function create() {
        
        return view('articles.create');
    }

    /**
     * Store a newly created Articles in storage.
     *
     * @param CreateArticlesRequest $request
     *
     * @return Response
     */
    public function store(CreateArticlesRequest $request) {
        
        $input = $request->all();
        
        if ($request->file('image') != '') {
            
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $path = "images/articles";

            $imagePath = public_path($path); // Local
            //$imagePath = public_path().'/../../public_html/'.$path; // Server

            $request->file('image')->move($imagePath, $filenameWithExt);

            $input['image'] = $filenameWithExt;
        }
        //dd($input);
        $articles = $this->articlesRepository->create($input);

        if (!empty($input['tags'])) {

            $this->updateTags($articles, $input);
        }

        Flash::success('Articles saved successfully.');

        return redirect(url('/'));
    }

    /**
     * Display the specified Articles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id) {
        
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('articles', $articles)->with('tags', $articles->articleTags)->with('comments', $articles->comments);
    }

    /**
     * Show the form for editing the specified Articles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id) {
        
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('articles', $articles);
    }

    /**
     * Update the specified Articles in storage.
     *
     * @param int $id
     * @param UpdateArticlesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticlesRequest $request) {
        
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {

            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        $input = $request->all();

        if (!empty($input['tags'])) {

            $this->updateTags($articles, $input);
        }

        if ($request->file('image') != '') {
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $path = "images/articles";

            $imagePath = public_path($path); // Local
            //$imagePath = public_path().'/../../public_html/'.$path; // Server

            $request->file('image')->move($imagePath, $filenameWithExt);

            $input['image'] = $filenameWithExt;
        }

        $articles = $this->articlesRepository->update($input, $id);

        Flash::success('Articles updated successfully.');

        return redirect(url()->previous());
    }

    /**
     * Remove the specified Articles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id) {
        
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        $this->articlesRepository->delete($id);

        Flash::success('Articles deleted successfully.');

        return redirect(route('articles.index'));
    }

    private function updateTags($articles, $input) {

        $allTags = Tag::where('deleted_at', NULL)->pluck('name', 'id')->toArray();

        $tags = explode(',', trim($input['tags']));

        for ($i = 0; $i < count($tags); $i++) {

            if (in_array($tags[$i], $allTags)) {

                $thisTagId = Tag::where('name', '=', $tags[$i])->where('deleted_at', NULL)->pluck('name', 'id')->toArray();

                $thisTagPresent = ArticleTag::where('tag_id', key($thisTagId))->where('article_id', $articles->id)->where('deleted_at', NULL)->pluck('tag_id', 'id')->toArray();

                if (count($thisTagPresent) < 1) {

                    ArticleTag::Create(['article_id' => $articles->id, 'tag_id' => key($thisTagId)]);
                }
            } else {

                $newTag = Tag::firstOrCreate(['name' => $tags[$i]]);

                ArticleTag::Create(['article_id' => $articles->id, 'tag_id' => $newTag->id]);
            }
        }
    }

}
