<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/20/2016
 * Time: 9:48 AM
 */

namespace Innovate\Category\SEOProvider;


use Innovate\Category\Category;
use Innovate\SEOProvider\ObjectFlat;
use Innovate\SEOProvider\SEOProviderContract;
use OpenGraph;
use SEOMeta;
use Twitter;


/**
 * Class CategorySEOGenerator
 * @package Innovate\Category\SEOProvider
 */
class CategorySEOGenerator implements SEOProviderContract {


    /**
     * @param Category|ObjectFlat $category
     */
    public function set(ObjectFlat $category)
    {
      $this->SEOMeta($category);
      $this->OpenGraph($category);
      $this->Twitter($category);
    }

    /**
     *
     */
    public function fire()
    {
         // TODO: Implement fire() method.
    }

    /**
     * @param Category $category
     */
    public function SEOMeta(Category $category)
    {
        SEOMeta::setTitle($category->category_description->name);
        SEOMeta::setDescription($category->category_description->meta_description);
        SEOMeta::addMeta('category:published_time', $category->created_at->toW3CString(), 'property');
    }

    /**
     * @param Category $category
     */
    public function OpenGraph(Category $category)
    {

        OpenGraph::setDescription($category->category_description->meta_description);
        OpenGraph::setTitle($category->category_description->meta_title);
        OpenGraph::setUrl(config('app.url'));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addProperty('locale:alternate', ['am-et']);

        OpenGraph::addImage(['url' => config('app.url').'/app/innovate/product/'.$category->image, 'size' => 300]);
    }

    /**
     * @param Category $category
     */
    public function Twitter(Category $category)
    {

        Twitter::setTitle($category->category_description->name);
        Twitter::setSite('@InnovateEcommerce');
    }
}