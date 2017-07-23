<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 11:04 AM.
 */

namespace App\Http\Controllers\Frontend\Category;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Innovate\Category\SEOProvider\CategorySEOGenerator;
use Innovate\Image\InnovateImageUploadContract;
use Innovate\Repositories\Category\CategoryContract;
use Innovate\Requests\Category\StoreCategoryRequest;
use Theme;

/**
 * Class CategoryController.
 */
class FrontendCategoryController extends Controller
{
    //use SEOToolsTrait;

    /**
     * @var
     */
    public $category;

    public $imageDriver;

    /**
     * @param CategoryContract            $categoryContract
     * @param InnovateImageUploadContract $image
     */
    public function __construct(CategoryContract $categoryContract, InnovateImageUploadContract $image)
    {
        $this->category = $categoryContract;
        $this->imageDriver = $image;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Theme::view('frontend.category.index')
            ->withCategorys($this->category->eagerLoad('category_description', 9));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create')
            ->withCategorys($this->category->eagerLoad('category_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|StoreCategoryRequest $request
     *
     * @throws GeneralException
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //check if there is a image file in the form request
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //check if the image file valid
            if (!$file->isValid()) {
                throw new GeneralException('There is error in your image file.');
            }
            //pass the image along with the path to the upload to the imageDriver for further processing
            $im = $this->imageDriver->up($file, config('innovate.upload_path').DS.'product'.DS.Str::random(32).'.'.$file->guessExtension());
            $all = $request->all();
            $all['valid_image'] = $im->basename;
            $this->category->create($all);

            return redirect()->route('admin.category.index')->withFlashSuccess('Product category created !');
        } else {
            throw new GeneralException('The file should not be empty');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int                  $id
     * @param CategorySEOGenerator $seo
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id, CategorySEOGenerator $seo)
    {
        $category = $this->category->findOrThrowException($id);
        $seo->set($category);

        return view('backend.category.show')
            ->withCategory($category)
            ->withCategorys($this->category->eagerLoad('category_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
