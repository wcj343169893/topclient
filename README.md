# topclient
基于官方taobao-sdk-PHP 改版

## 安装
``` bash
$ composer install "mofing/umeng":"~1.1"
```
或者修改composer.json
```
{
    "require": {
        "mofing/umeng": "~1.1"
    }
}
```

## 用法

```php
use Taobao\TopClient\Client;
use Taobao\TopClient\Request\WirelessShareTpwdQueryRequest;

//定义错误日志保存目录，如果没定义，则默认是tmp
if (! defined("TOP_SDK_WORK_DIR")) {
    define("TOP_SDK_WORK_DIR", "/tmp/");
}
        
//初始化客户端(请修改key和secret)
$client = new Client("23825453", "e53453a32e04deb21fdb2b6f9b5150be");
$client->format = "json";

//根据短地址，查询商品详细
$req = new WirelessShareTpwdQueryRequest();
$req->setPasswordContent("【铁工房铸铁炒锅 无涂层铸铁锅31cm胡桃木老式圆底生铁不粘炒菜锅】，復·制这段描述€giUu0D44EZa€后到[表情]淘♂寳♀[表情]");
$result = $client->execute($req);
print_r($result);

//返回值
stdClass Object
(
    [content] => 铁工房铸铁炒锅 无涂层铸铁锅31cm胡桃木老式圆底生铁不粘炒菜锅
    [native_url] => tbopen://m.taobao.com/tbopen/index.html?action=ali.open.nav&module=h5&h5Url=https%3A%2F%2Fitem.taobao.com%2Fitem.htm%3Fut_sk%3D1.VyKm%2Fv0tg5YDAJU%2FHXu4IaDr_21380790_1528358199336.TaoPassword-QQ.1%26id%3D542172501116%26sourceType%3Ditem%26price%3D268%26origin_price%3D1288%26suid%3DC1BA70DB-A9BA-4849-8BAC-9ADCC5A5F7E8%26un%3D4acabd7a0fa2d5773dd3af49e2902fce%26share_crt_v%3D1%26sp_tk%3D4oKsZ2lVdTBENDRFWmHigqw%3D%26spm%3Da211b4.23825453%26visa%3D13a09278fde22a2e%26disablePopup%3Dtrue%26disableSJ%3D1&appkey=23825453&visa=13a09278fde22a2e
    [pic_url] => http://gw.alicdn.com/bao/uploaded/i4/2115474719/TB1sXsmnndYBeNkSmLyXXXfnVXa_!!0-item_pic.jpg
    [price] => 268.00
    [suc] => 1
    [thumb_pic_url] => http://gw.alicdn.com/bao/uploaded/i4/2115474719/TB1sXsmnndYBeNkSmLyXXXfnVXa_!!0-item_pic.jpg_170x170.jpg
    [title] => 淘口令-宝贝
    [url] => https://item.taobao.com/item.htm?ut_sk=1.VyKm/v0tg5YDAJU/HXu4IaDr_21380790_1528358199336.TaoPassword-QQ.1&id=542172501116&sourceType=item&price=268&origin_price=1288&suid=C1BA70DB-A9BA-4849-8BAC-9ADCC5A5F7E8&un=4acabd7a0fa2d5773dd3af49e2902fce&share_crt_v=1&sp_tk=4oKsZ2lVdTBENDRFWmHigqw=&spm=a211b4.23825453&visa=13a09278fde22a2e&disablePopup=true&disableSJ=1
    [request_id] => s7f2g9w6nbol
)

```