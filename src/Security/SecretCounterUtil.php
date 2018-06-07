<?php
namespace Taobao\TopClient\Security;

/**
 *
 * @author Wenchaojun <343169893@qq.com>
 * @property \Taobao\TopClient\Security\iCache $cacheClient
 */
class SecretCounterUtil
{

    private $topClient;

    private $cacheClient = null;

    private $counterMap;

    function __construct($client)
    {
        $this->topClient = $client;
        $this->counterMap = [];
    }

    /*
     * 如果不走缓存模式，析构即调用API回传统计信息
     */
    function __destruct()
    {
        if ($this->cacheClient == null) {
            //$this->cacheClient = new YacCache();
        }
    }

    function report($session)
    {
        $request = new TopSdkFeedbackUploadRequest();
    }

    function setCacheClient($cache)
    {
        $this->cacheClient = $cache;
    }

    function incrDecrypt($delt, $session, $type)
    {
        $item = $this->getItem($session);
        if ($item == null) {
            $item = new SecretContext();
            $this->putItem($session, $item);
        }
        
        if ($type == "nick") {
            $item->decryptNickNum += $delt;
        } else if ($type == "receiver_name") {
            $item->decryptReceiverNameNum += $delt;
        } else if ($type == "phone") {
            $item->decryptPhoneNum += $delt;
        } else if ($type == "simple") {
            $item->decryptSimpleNum += $delt;
        }
    }

    function incrEncrypt($delt, $session, $type)
    {
        $item = $this->getItem($session);
        if ($item == null) {
            $item = new SecretContext();
            $this->putItem($session, $item);
        }
        
        if ($type == "nick") {
            $item->encryptNickNum += $delt;
        } else if ($type == "receiver_name") {
            $item->encryptReceiverNameNum += $delt;
        } else if ($type == "phone") {
            $item->encryptPhoneNum += $delt;
        } else if ($type == "simple") {
            $item->encryptSimpleNum += $delt;
        }
    }

    /**
     * 获取
     * 
     * @param unknown $session            
     * @return mixed|\Taobao\TopClient\Security\SecretContext
     */
    function getItem($session)
    {
        if ($this->cacheClient == null) {
            return $this->counterMap[$session];
        } else {
            return $this->cacheClient->getCache('s_' . $session);
        }
    }

    function putItem($session, $item)
    {
        if ($this->cacheClient == null) {
            $this->counterMap[$session] = $item;
        } else {
            $this->cacheClient->setCache('s_' . $session, $item);
        }
    }
}
?>