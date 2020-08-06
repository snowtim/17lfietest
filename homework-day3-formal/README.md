
詢價系統

１.資料庫建立

 Database 名稱: inquirysystem

 內含三張 Table 以下為 Table 名稱, 欄位名稱及屬性
 user(使用者表單)
 (id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR,
  email VARCHAR,
  identity VARCHAR,
  password VARCHAR)

 merchandise(商品表單)
 (id INT AUTO_INCREMENT PRIMARY KEY,
  item VARCHAR)

 inquiry_record(回覆詢價表單)
 (id INT AUTO_INCREMENT PRIMARY KEY,
  inquiry_item VARCHAR,
  quantity INT,
  price INT,
  quesioner_id INT,
  answerer_id INT,
  reply_status INT,
  reply_time VARCHAR,
  ask_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP)

  其中使用者及商品表單已各先建立十筆資料
　回覆詢價表單則依使用者不同在客戶送出詢價表單後會建立資料, 業務回覆價格後更新資料庫資料(裡頭現有資料為測試寫入功能結果)

２.程式部分

　商品詢價所有程式均放置於 homework-day3-formal 資料夾中, 下面說明各支程式作用:
　index.view.php->最開始業務及客戶登入自己帳戶的頁面
　loginwrong.php->若登入帳號或密碼有誤均會導向此支程式告知使用者帳號或密碼有誤
  Connection.php->開始連接資料庫的程式
　authentication.php->驗證登入帳號及密碼, 並判斷此帳號為業務或客戶, 如為業務則導向 business.php; 客戶則導向 guest.php
  business.php->業務帳戶頁面, 可看見所有詢價單資料不論是否已回覆報價, 並可登出帳號及前往回覆報價
　guest.php->客戶帳戶頁面, 只可看見自己的詢價單, 可登出帳號及前往詢價頁面
  inquiry.php->詢價頁面, 可簡單選擇目前公司商品並輸入數量詢問總價, 並可回至客戶自己的詢價歷史頁面
　record.php->在客戶送出詢價請求後, 執行將此詢價寫入資料庫功能
　reply.php->業務回覆詢價頁面, 內容顯示詢價客戶姓名及欲詢價商品相關資訊, 業務將金額輸入並送出表單後回覆價格讓客戶登入後可看見價格

３.其他相關檔案

　inquirysystem.sql->詢價系統 Database 的匯出檔, 可匯入目前所建資料
