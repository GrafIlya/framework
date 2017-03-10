<?php
Class Controller_Pages extends Controller_Abstract
{
    public function error($param)
    {
        $View = $this->loadView('error');
        $View->view('Pages/empty');
        $View->set('text', $param);
        $View->render("404");
    }
    public function index()
    {
        $View = $this->loadView('index');// _layout
        $View->view('Pages/body/index'); // Pages
        $View->render("Главная"); // title
    }
    public function articles()
    {
        $View = $this->loadView('index');
        $View->view('Pages/body/articles'); // Pages
        $View->render("Статьи"); // title
    }
	public function registr()
    {
        $View = $this->loadView('index');
        $View->view('Pages/scripts/registr'); // Pages
        $View->render("Регистрация"); // title
    }
	public function login()
    {
        $View = $this->loadView('index');
        $View->view('Pages/scripts/login'); // Pages
        $View->render("Вход"); // title
    }
	public function contacts()
    {
        $View = $this->loadView('index');
        $View->view('Pages/scripts/contacts'); // Pages
        $View->render("Контакты"); // title
    }
	public function termins()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/one/termins'); // Pages
        $View->render("Термины и определения"); // title
    }
	
	public function trebov()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/one/trebov'); // Pages
        $View->render("Требования"); // title
    }
	public function ogranich()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/one/ogranich'); // Pages
        $View->render("Ограничения"); // title
    }
	
	public function prilog()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/one/prilog'); // Pages
        $View->render("Приложения"); // title
    }
	
	
	
	public function podrob()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/two/podrob'); // Pages
        $View->render("Приложения"); // title
    }
	public function ANOI()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/two/ANOI'); // Pages
        $View->render("Приложения"); // title
    }
	public function AIM()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/two/AIM'); // Pages
        $View->render("Приложения"); // title
    }
	public function AIZ()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/two/AIZ'); // Pages
        $View->render("Приложения"); // title
    }
	
	
	public function pro4()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/third/pro4'); // Pages
        $View->render("Приложения"); // title
    }
	public function terror()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/third/terror'); // Pages
        $View->render("Приложения"); // title
    }
	public function sp()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/third/sp'); // Pages
        $View->render("Приложения"); // title
    }
	public function specs()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/third/specs'); // Pages
        $View->render("Приложения"); // title
    }
	public function cs()
    {
        $View = $this->loadView('index');
        $View->view('Pages/information/third/cs'); // Pages
        $View->render("Приложения"); // title
    }
	public function reset()
    {
        $View = $this->loadView('index');
        $View->view('Pages/scripts/reset'); // Pages
        $View->render("Приложения"); // title
    }
}