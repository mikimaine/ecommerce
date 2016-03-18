<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\Products;


use Innovate\Eventing\EventGenerator;

class Product extends \Eloquent {

    use EventGenerator;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    protected  $fillable = ['title','description'];

    /**
     * @param $title
     * @param $description
     * @return $this
     */
    public function post($title, $description)
    {
        $this->title = $title;
        $this->description = $description;

         $this->save();

        $this->raise(new ProductWasPosted($this));

        return $this;
    }

    public function archive()
    {
        $this->delete();

        $this->raise(new ProductWasArchived($this));

    }
}