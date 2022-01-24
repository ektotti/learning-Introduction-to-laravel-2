<?php 
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer {

    public function compose(View $view) {
        $view->with('composer_class_message', 'this view is "'. $view->getName() . '"!!');
    } 

}

?>