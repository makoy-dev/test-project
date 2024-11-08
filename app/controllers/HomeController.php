<?php


class HomeController extends Controller {

    public function index() {

        $f3 = Base::instance();

        $f3->set('email', 'hendro.steven@gmail.com');
        $f3->set('password', '');

        echo Template::instance()->render('index.html');
    }

}
