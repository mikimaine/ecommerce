<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 9:14 PM
 */

namespace Innovate\Pagination;


use Illuminate\Pagination\BootstrapThreePresenter;

class HDPresenter extends BootstrapThreePresenter{

    public function render()
    {
        if($this->hasPages()) {
            return sprintf(
                '<div class="pagi-custom"><div class="pull-left">%s %s</div> <div class="pull-right">%s %s</div></div>',

                $this->getFirst(),

                $this->getButtonPre(),

                $this->getButtonNext(),

                $this->getLast()
            );
        }
        return "";
    }

    public function getLast()
    {
        $url = $this->paginator->url($this->paginator->lastPage());
        $btnStatus = "";
        if($this->paginator->lastPage() == $this->paginator->currentPage()) {
            $btnStatus = 'active';
        }
        return $btn = "<a class='button button-xsmall ".$btnStatus."' href='".$url."'>Last >> </a>";

    }

    public function getFirst()
    {
        $url = $this->paginator->url(1);
        $btnStatus = "";


        if(1 == $this->paginator->currentPage()) {
            $btnStatus = 'active';
        }

        return $btn = "<a class='button button-xsmall ".$btnStatus."'  href='".$url."'> << First </a>";

    }

    public function getButtonPre()

    {

        $url = $this->paginator->previousPageUrl();

        $btnStatus = '';


        if(empty($url)){

            $btnStatus = 'active';

        }

        return $btn = "<a class='button button-xsmall ".$btnStatus."'  href='".$url."'>< Previous </a>";

    }


    public function getButtonNext()

    {

        $url = $this->paginator->nextPageUrl();

        $btnStatus = '';


        if(empty($url)){

            $btnStatus = 'active';

        }

        return $btn = "<a class='button button-xsmall ".$btnStatus."'  href='".$url."'> Next >  </a>";

    }
}