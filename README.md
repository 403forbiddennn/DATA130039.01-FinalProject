# DATA130039.01-FinalProject
This is my final project of the course database.
* 由home.php进入，主界面
* 主界面左上角图标是一个指向home.php的超链接
* 右上角的管理员登录直接指向了phpmyadmin的index.php，这是为了方便起见，并未做数据库的后台管理可视化界面，直接登录系统进行修改
* 右上角的联系我们点击之后进入contact.php界面，通过在三个文本框中输入相关内容并点击send，由feedback.php对数据库执行相关插入语句操作，并最终返回home.php界面
* 搜索框可以输入电影的中文名，链接到相关的电影界面；若名称输错或电影不在我们的数据库中，就返回错误界面。该功能由search_movie.php和Specific_Movie.html共同完成。
* 下面TopRated可以查看评分前250的电影，该功能由get_top_movies.php和TopRated.html共同完成。
* 另一个超链接实现按类查找，点击后请求get_genres.php进入按类搜索界面，点击相关的类即可完成按类电影排名的查询
* 静态网站html和css(在assets下)大部分由bootsrap studio制作生成，php相关函数和文件均系自己手写
