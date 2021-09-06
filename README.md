# tcg-decks-site-api

## Laravelを使用
- DBはMySQLを使用

### 使用方法
- 「composer」をインストールする
- プロジェクトを格納されているディレクトリに移動し、以下を実行する
```
composer update
```
- 「.env.local」ファイルを「.env」にリネームし、DB接続情報を変更しておく
- 以下のコマンドを実行し、DBのテーブルとダミーデータを作成する
```
php artisan migrate
```
```
php artisan db:seed
```
- 以下コマンドでサーバを起動
```
php artisan serve
```

- ブラウザでURL「localhost:8000/api」を開き起動していることを確認


