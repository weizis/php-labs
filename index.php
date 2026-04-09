<?php
class Page{
	private string $name="page";
	private string $template="<div><p>It is a default page</p></div>";
	public function render(): void
	{
		echo "<h2>Вы на странице: " . $this->name . "</h2>";
		echo $this->template;
	}
}

class BlogPage extends Page{
	private string $name = "blog";
	private string $template = '
		<div style="font-family: Arial, sans-serif; max-width: 500px; margin: 20px auto;">
            <div class="card" style="border: 1px solid #ccc; border-radius: 8px; padding: 15px; margin-bottom: 15px; background-color: #f5f5f5;">
                <h3 style="color: #2c3e50; margin-top: 0;">Бог путешествует инкогнито</h3>
                <p style="margin: 5px 0;"><strong>Автор:</strong> Лоран Гунель</p>
                <p style="margin: 5px 0; color: #555;">Книга о поиске смысла жизни и любви</p>
            </div>
            <div class="card" style="border: 1px solid #ccc; border-radius: 8px; padding: 15px; margin-bottom: 15px; background-color: #f5f5f5;">
                <h3 style="color: #2c3e50; margin-top: 0;">Ставок больше нет</h3>
                <p style="margin: 5px 0;"><strong>Автор:</strong> Пьер Буало и Тома Нарсежак</p>
                <p style="margin: 5px 0; color: #555;">Мистическая история о любви после смерти</p>
            </div>
            <div class="card" style="border: 1px solid #ccc; border-radius: 8px; padding: 15px; margin-bottom: 15px; background-color: #f5f5f5;">
                <h3 style="color: #2c3e50; margin-top: 0;">Коллекционер</h3>
                <p style="margin: 5px 0;"><strong>Автор:</strong> Джон Фаулз</p>
                <p style="margin: 5px 0; color: #555;">Психологический триллер о коллекционере бабочек</p>
            </div>
        </div>
	';
	 public function render(): void
    	{
	echo "<h2>Вы на странице: " . $this->name . "</h2>";
           echo $this->template;
    	}
}
echo '<a href="?page=page">Страница Page</a>';
echo '<br>';
echo '<a href="?page=blog">Страница Blog</a>';

if(isset($_GET['page'])){
	if($_GET['page'] ==='page'){
	  $page=new Page();
	  $page->render();
	} elseif($_GET['page']==='blog'){
	  $blog=new BlogPage();
	  $blog->render();
	}
}else{
	$default=new Page();
	$default->render();
}
?>
