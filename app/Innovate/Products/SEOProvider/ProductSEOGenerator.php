<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 5:50 PM.
 */

namespace Innovate\Products\SEOProvider;

use Innovate\Category\Category;
use Innovate\SEOProvider\ObjectFlat;
use Innovate\SEOProvider\SEOProviderContract;
use OpenGraph;
use SEOMeta;
use Twitter;

class ProductSEOGenerator implements SEOProviderContract
{
    public function set(ObjectFlat $category)
    {
        // TODO: Implement set() method.
    }

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
