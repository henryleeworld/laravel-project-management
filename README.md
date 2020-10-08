# Laravel 8 專案管理

策略與科技領域的常態則是依專案收費。選擇這個方法必須擅長估計成本，尤其是達成理想結果所需的時間，一開始就要談清楚最後的產出。Laravel 8 專案管理主要是用的 [QuickAdminPanel](https://quickadminpanel.com) 生成的，除了一些定制代碼，可依需求彈性改造的工具。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，建立一個從 `public/storage` 到 `storage/app/public` 的符號連結。
```sh
$ php artisan storage:link
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/51fHtt1.png)
> 新增客戶，有時候客戶指的可能不是單一人員，而是某一部門或機構

![](https://i.imgur.com/JF9psht.png)
> 新增專案，有意義名稱可以讓人更容易理解想表達的概念

![](https://i.imgur.com/HkVkDWz.png)
> 相關費用一般以達到某個里程碑來計算。由於許多工作說明書專案曠日費時，因此依據產出的計費方式，通常還會外加每月的委任費。