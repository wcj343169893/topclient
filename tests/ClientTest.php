<?php
use Taobao\TopClient\Client;
use Taobao\TopClient\Request\TbkItemGetRequest;
use Taobao\TopClient\Request\WirelessShareTpwdQueryRequest;
use Taobao\TopClient\Request\WirelessShareTpwdCreateRequest;
use Taobao\TopClient\Domain\GenPwdIsvParamDto;
use Taobao\TopClient\HttpdnsGetRequest;

/**
 * Client test case.
 */
class ClientTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Client
     */
    private $client;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        // TODO Auto-generated ClientTest::setUp()
        $this->client = new Client("23825453", "e53453a32e04de9a1fdb2b6f9b5150be");
        $this->client->format = "json";
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated ClientTest::tearDown()
        $this->client = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    public function testDns()
    {
        $req = new HttpdnsGetRequest();
        $req->putOtherTextParam("name", "test");
        $req->putOtherTextParam("value", 0);
        $result = $this->client->execute($req);
        print_r($result);
    }

    public function testInit()
    {
        $req = new TbkItemGetRequest();
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
        $req->setQ("男装");
        //$result = $this->client->execute($req);
        // print_r($result);
    }

    public function testTpwdCreate()
    {
        $req = new WirelessShareTpwdCreateRequest();
        $tpwd_param = new GenPwdIsvParamDto();
        $tpwd_param->ext = "{\"xx\":\"xx\"}";
        $tpwd_param->logo = "http://m.taobao.com/xxx.jpg";
        $tpwd_param->url = "http://m.taobao.com";
        $tpwd_param->text = "超值活动，惊喜活动多多";
        $tpwd_param->user_id = "24234234234";
        
        $req->setTpwdParam($tpwd_param);
        $result = $this->client->execute($req);
        print_r($result);
    }

    public function testTpwdQuery()
    {
        $req = new WirelessShareTpwdQueryRequest();
        $req->setPasswordContent("【铁工房铸铁炒锅 无涂层铸铁锅31cm胡桃木老式圆底生铁不粘炒菜锅】，復·制这段描述€giUu0D44EZa€后到[表情]淘♂寳♀[表情]");
        $result = $this->client->execute($req);
        print_r($result);
    }
}

