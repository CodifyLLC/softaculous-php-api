<?php

namespace CodifyLLC\softaculous;

class softaculous {
    private $user;
    private $password;
    private $domain;
    private $port;
    private $timeout;
    private $act;
    private $soft;
    private $insid;
    private $post;
    private $curlDebug;

    public function __construct()
    {
        $this->setPort(2083);
        $this->setTimeout(60);
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * @return mixed
     */
    public function getAct()
    {
        return $this->act;
    }

    /**
     * @param mixed $act
     */
    public function setAct($act)
    {
        $this->act = $act;
    }

    /**
     * @return mixed
     */
    public function getSoft()
    {
        return $this->soft;
    }

    /**
     * @param mixed $soft
     */
    public function setSoft($soft)
    {
        $this->soft = $soft;
    }

    /**
     * @return mixed
     */
    public function getInsid()
    {
        return $this->insid;
    }

    /**
     * @param mixed $insid
     */
    public function setInsid($insid)
    {
        $this->insid = $insid;
    }


    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param softaculousPost $post
     */
    public function setPost(softaculousPost $post)
    {
        $this->post = $post;
    }

    /**
     * @return mixed
     */
    public function getCurlDebug()
    {
        return $this->curlDebug;
    }

    /**
     * @param mixed $curlDebug
     */
    public function setCurlDebug($curlDebug)
    {
        $this->curlDebug = $curlDebug;
    }

    


    public function send()
    {
        $url = 'https://' . $this->getUser() .':'.$this->getPassword().'@'.$this->getDomain().':'.$this->getPort();
        $url .= '/frontend/paper_lantern/softaculous/index.live.php?&api=serialize';

        $act = $this->getAct();
        if (!empty($act)) {
            $url .= '&act=' . $act;
        }

        $soft = $this->getSoft();
        if (!empty($soft)) {
            $url .= '&soft=' . $soft;
        }

        $insid = $this->getInsid();
        if (!empty($insid)) {
            $url .= '&insid=' . $insid;
        }

        // Set the curl parameters
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->getTimeout());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if(!empty($this->post)) {
            curl_setopt($ch, CURLOPT_POST, 1);

            $post = get_object_vars($this->post);
            foreach($post as $key => $val) {
                if (empty($val)) {
                    unset($post[$key]);
                }
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        }


        // CURLOPT_VERBOSE: TRUE to output verbose information. Writes output to STDERR,
        // or the file specified using CURLOPT_STDERR.
        curl_setopt($ch, CURLOPT_VERBOSE, true);

        $verbose = fopen('php://temp', 'rw+');
        curl_setopt($ch, CURLOPT_STDERR, $verbose);

        // Get response from the server.
        $resp = curl_exec($ch);

        // close cURL resource, and free up system resources
        curl_close($ch);

        rewind($verbose);
        $verboseLog = stream_get_contents($verbose);

        if ($this->getCurlDebug()) {

            print "Curl Debug: \n";
            print $verboseLog;
        }

        // Unserialize data
        $res = unserialize($resp);

        return $res;
    }
}