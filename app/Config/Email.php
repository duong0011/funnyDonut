<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    /**
     * @var string
     */
    public $fromEmail;

    /**
     * @var string
     */
    public $fromName;

    /**
     * @var string
     */
    public $recipients;

    /**
     * The "user agent"
     *
     * @var string
     */
    public $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     *
     * @var string
     */
<<<<<<< HEAD
    public $protocol = 'mail';
=======
    public $protocol = 'smtp';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * The server path to Sendmail.
     *
     * @var string
     */
    public $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Address
     *
     * @var string
     */
<<<<<<< HEAD
    public $SMTPHost;
=======
    public $SMTPHost =  'smtp.googlemail.com';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * SMTP Username
     *
     * @var string
     */
<<<<<<< HEAD
    public $SMTPUser;
=======
    public $SMTPUser ='duongtruong2022003@gmail.com';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * SMTP Password
     *
     * @var string
     */
<<<<<<< HEAD
    public $SMTPPass;
=======
    public $SMTPPass = 'hynamisbemuznhoy';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * SMTP Port
     *
     * @var int
     */
<<<<<<< HEAD
    public $SMTPPort = 25;
=======
    public $SMTPPort = 465;
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * SMTP Timeout (in seconds)
     *
     * @var int
     */
    public $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     *
     * @var bool
     */
    public $SMTPKeepAlive = false;

    /**
     * SMTP Encryption. Either tls or ssl
     *
     * @var string
     */
<<<<<<< HEAD
    public $SMTPCrypto = 'tls';
=======
    public $SMTPCrypto = 'ssl';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * Enable word-wrap
     *
     * @var bool
     */
    public $wordWrap = true;

    /**
     * Character count to wrap at
     *
     * @var int
     */
    public $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     *
     * @var string
     */
<<<<<<< HEAD
    public $mailType = 'text';
=======
    public $mailType = 'html';
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     *
     * @var string
     */
    public $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     *
     * @var bool
     */
    public $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     *
     * @var int
     */
    public $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     *
     * @var string
     */
    public $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     *
     * @var string
     */
    public $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     *
     * @var bool
     */
    public $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     *
     * @var int
     */
    public $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     *
     * @var bool
     */
    public $DSN = false;
}
