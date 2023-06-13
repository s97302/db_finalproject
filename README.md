﻿<a name="br1"></a> 

資料庫管理期末專案書面報告

1\. 設計發想：

當在學期初得知要做一份期末專案時，我們組員就進行了初步

的討論，打算在兩周內決定出最後的主題，因為這學期在清交兩校

的管理學院有舉辦管院小梅竹、學校有系際盃、各式球類聯賽、甚

至是環校馬拉松等等的運動賽事，恰巧我們組員都各自有參加其中

幾項，但是在其中我們發現了幾個缺點，所以就想說運用所學來試

試看能不能做出更好的報名系統。

而我們發現到的問題是進入到大學以來，參加學校的體育競賽

舉凡運動會、系際盃或是各球類的聯賽，大家不是用紙本報名就是

透過體育幹部、系隊隊長等等的人上網登記，而且賽程往往都是用

較沒效率或是較傳統的抽籤的方式產出，為了改善學校的體育競賽

報名系統以及讓大家更方便的去參加各項賽事，勢必要將大家的報

名意願比較高，因此我們做了這個網頁，其主要特點為團體報名的

查詢、以及賽程的查詢系統，讓大家更快速報名且快速的知道比賽

資訊，以下會有更深入的介紹。



<a name="br2"></a> 

2\. 功能介紹

**Home**：

進入到首頁後我們可以在右上角看到 login、register 和 search

的功能，再往下滑可以看到跑馬燈提醒事項，接著是我們的賽事周

報或是一些體育新聞(助教一定要看)。而在註冊帳號時需要會員的帳

號、密碼、身分證字號以及中文名字；在註冊過後會員再登入過後

會有以下三種功能，修改密碼、修改身分證字號、修改使用者姓

名，讓使用者有足夠的彈性來修改自己的會員資料，而 search 我們

會稍後在講解

**About**：

在 about 這頁，首先我們是將 8 種運動比賽的規章都放在這頁，

讓想報名的參賽者可以更容易了解比賽的規則和內容，這樣一來就

解決了規則不明確或是資訊不對等的問題；再往下拉則是我們的資

訊欄，關於報名須知、賽程的安排以及到場的提醒都會被我們公告

在那邊，讓使用者更容易去注意到。

**Competitions**：

接著是我們花最久時間的報名頁面，我們這次做了八種的比賽

項目，有團體的競賽也有單人的競賽，而最主要的特點就是團體報



<a name="br3"></a> 

名只需要隊長是我們註冊過的會員，隊員並不需要，而隊員如果想

要知道自己有沒有被報名到的話，也只要在我們上述的 search 中輸

入身分證字號就可以查詢到自己的報名狀況：（一）登入前搜尋，此

功能開放給沒有註冊帳號的團體賽隊員，隊長在報名團體賽時會輸

入隊員的身分證，SESSION 會儲存隊員的身分證和隊員名字，在搜

尋時能夠透過身分證去查詢自己參與的團體賽，顯示出該隊伍名

稱。（二）登入後搜尋，再登入後，會由 SESSION 吃到已經儲存過帳

號、使用者姓名、身份證字號。所以這個按鈕按下去之後，會直接

顯示出文字說明你報名了那些比賽。這個查詢功能主要提供以及登

入後想要查詢自己報名了哪一些單人賽以及「作為隊長」代表報名

了哪一些團體比賽。在文字旁邊有超連結可以讓你去報名比賽或取

消已經報名的比賽。以下會附上我們的截圖：

單人查詢結果

團體查詢結果

接著我要介紹我們的報名功能，報名是因為已經紀錄了登入時的用

戶資料，為確保帳號安全性，不被濫用拿去幫別人報名。需要再核

對一次身分證才可以報名比賽。單人賽只要有帳號即可進行報名，



<a name="br4"></a> 

團體則需隊長持有帳號進行報名，確認該隊伍名稱可以使用後，在

填寫隊員的資料，隊員僅需提供身分證跟真實姓名即可，不必再額

外註冊帳號。另外，如果一種比賽已經報名滿 8 隊時。在第 9 個人

(隊伍)點擊報名的按鈕時，會跳出警告說該比賽名額已滿。以下用截

圖輔助說明

單人報名我們用 demo 時的資料做例子來說明，先登入會員後找到

你想要報名的球類運動，輸入個人資訊後我們就可以在 MySQL 中看

到你的報名資料，而 NUM=7 則是報名時就亂數給你的序號，這樣就

更公平的產生賽程。下者為團體報名：



<a name="br5"></a> 

團體報名的部分先由隊長登入後並且輸入隊名，資料庫會先將隊長

的資料以及隊伍名稱存在 football，接著我們再要求隊長填入隊員的

姓名以及身分證字號，會蒐集在另外一個叫做 football teammate 的

資料庫，以利於之後用 search 功能時隊員使用身分證就可以查詢報

名結果，而 NUM=1 則是跟單人報名一樣亂數產生的賽程編號結果。

接著要介紹的功能是取消報名的部分，有可能在報名之後需要修改

隊員名稱或是取消報名，所以我們設計了一個取消報名的功能，從

Menu 的 Cancel 進去，每一種比賽都有專屬自己的頁面，輸入身分

證核對身分後，會出現成功取消報名。如果是按到取消尚未報名過

的比賽，也會印出尚未報名該比賽的字樣。另外團體的取消功能只

能由隊長登入帳號進行取消功能，就算是隊員有註冊帳號也不能取

消。從 Menu 的 Cancel 進去，每一種比賽都有專屬自己的頁面，輸

入身分證核對身分後，會出現成功取消報名。如果是按到取消尚未



<a name="br6"></a> 

報名過的比賽，也會印出尚未報名該比賽的字樣。另外團體的取消

功能只能由隊長登入帳號進行取消功能，就算是隊員有註冊帳號也

不能取消，我們用截圖來演示一次：

上兩圖為我們單人與團體的取消報名頁面、下面三個則是取消過後

的資料庫，也就是上面的報名紀錄被 delete 掉的資料庫

最後是我們的賽程功能，在一個比賽報名滿 8 個人(隊伍)後，才可以

查看賽程，賽程採隨機分布，在報名時會得到一個亂數分發的序

號，在報名名額已滿時才會將這些亂數排進各個對戰組合裡面。避



<a name="br7"></a> 

免黑箱作業。所以是沒有辦法在報名名額尚未額滿的情況下查看自

己的對手的。

補充：

運用 google mail 將確認信透過 email 寄給完成的人本來是我們要做

的，但因為上網做過功課後發現需要一些ＡＰＩ的程序才可以完成

所以我們就放棄了，接著是繳費系統和自動客服系統，原本以為可

以用虛擬的方式來實現這些功能，但後來發現這些套件的使用有些

不是要付費不然就是要自己創造一個新的程式甚至是人機，因此我

們到最後就放棄了。

3\. 組員分工

林琮皓、張俊彥：大部分的程式撰寫製作以及 debug

蕭琪耀、謝昀辰：關聯式資料庫發想、前端程式優化

羅鵬鎮：網頁前端製作

