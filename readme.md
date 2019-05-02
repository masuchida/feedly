**初めて自前のWebアプリを作るよ！**

**TechPitの教材になることを目指して、  
RSSリーダーを作ります！**

___

**5/2 16:00着手**  
composerでLaravelプロジェクトをインストール（環境構築）  
make:authでユーザー認証及びビューを生成  
→php artisan make:auth  
デフォルトmigrateでUsersテーブルやらを生成  
→php artisan migrate  

sitesテーブルも作成。  
→php artisan make:migration create_sites_table  
ユーザーとサイトを繋ぐテーブルもあると良さげ。  

genresテーブルとSeederを作った。  
→php artisan make:seeder GenresSeeder  
→記載方法はGenresSeederを確認でOK  
db:seedでハマった時は【composer dump-autoload】で解決するはず。  

テーブルはユーザーとサイトをつなぐテーブルを作ったらフィニッシュでOKか？  
否、それはもちろん必要だが、RSS元データと解析後のデータを積むテーブルが必要  

あとはRSSを入力するフォームを作り、  
そこに入力されたRSSを解析し、表示させる場所が必要。  