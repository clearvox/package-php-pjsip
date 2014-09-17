<?php
namespace Clearvox\Asterisk\PJSIP\Endpoint;

use Clearvox\Asterisk\PJSIP\TypeInterface;

class Endpoint implements TypeInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $transport;

    /**
     * @var string
     */
    protected $aors;

    /**
     * @var string
     */
    protected $auth;

    /**
     * @var string
     */
    protected $context;

    /**
     * @var string
     */
    protected $disallow;

    /**
     * @var string
     */
    protected $allow;

    /**
     * @var string
     */
    protected $directMedia;

    /**
     * @var string
     */
    protected $connectedLineMethod;

    const METHOD_INVITE   = 'invite';
    const METHOD_REINVITE = 'reinvite';
    const METHOD_UPDATE   = 'update';

    /**
     * @var string
     */
    protected $directMediaMethod;

    /**
     * @var string
     */
    protected $directMediaGlareMitigation;

    const GLARE_MITIGATION_NON      = 'non';
    const GLARE_MITIGATION_OUTGOING = 'outgoing';
    const GLARE_MITIGATION_INCOMING = 'incoming';

    /**
     * @var string
     */
    protected $disableDirectMediaOnNat;

    /**
     * @var string
     */
    protected $dtmfMode;

    const DTMF_RFC4733 = 'rfc4733';
    const DTMF_INBAND  = 'inband';
    const DTMF_INFO    = 'info';

    /**
     * @var string
     */
    protected $externalMediaAddress;

    /**
     * @var string
     */
    protected $forceRport;

    /**
     * @var string
     */
    protected $iceSupport;

    /**
     * @var string
     */
    protected $identifyBy;

    const IDENTIFY_BY_USERNAME = 'username';

    /**
     * @var string
     */
    protected $mailboxes;

    /**
     * @var string
     */
    protected $mohSuggest;

    /**
     * @var string
     */
    protected $outbountAuth;

    /**
     * @var string
     */
    protected $outboundProxy;

    /**
     * @var string
     */
    protected $rewriteContact;

    /**
     * @var string
     */
    protected $rtpIpv6;

    /**
     * @var string
     */
    protected $rtpSymmetric;

    /**
     * @var string
     */
    protected $sendDiversion;

    /**
     * @var string
     */
    protected $sendPai;

    /**
     * @var string
     */
    protected $sendRpid;

    /**
     * @var int
     */
    protected $timersMinSe;

    /**
     * @var string
     */
    protected $timers;

    const TIMERS_FORCED   = 'forced';
    const TIMERS_NO       = 'no';
    const TIMERS_REQUIRED = 'required';
    const TIMERS_YES      = 'yes';

    /**
     * @var int
     */
    protected $timersSessExpires;

    /**
     * @var string
     */
    protected $callerId;

    /**
     * @var string
     */
    protected $callerIdPrivacy;

    const CALLER_ID_PRIVACY_ALLOWED_NOT_SCREENED    = 'allowed_not_screened';
    const CALLER_ID_PRIVACY_ALLOWED_PASSED_SCREENED = 'allowed_passed_screened';
    const CALLER_ID_PRIVACY_ALLOWED_FAILED_SCREENED = 'allowed_failed_screened';
    const CALLER_ID_PRIVACY_ALLOWED                 = 'allowed';
    const CALLER_ID_PRIVACY_PROHIB_NOT_SCREENED     = 'prohib_not_screened';
    const CALLER_ID_PRIVACY_PROHIB_PASSED_SCREENED  = 'prohib_passed_screened';
    const CALLER_ID_PRIVACY_PROHIB_FAILED_SCREENED  = 'prohib_failed_screened';
    const CALLER_ID_PRIVACY_PROHIB                  = 'prohib';
    const CALLER_ID_PRIVACY_UNAVAILABLE             = 'unavailable';

    /**
     * @var string
     */
    protected $callerIdTag;

    /**
     * @var string
     */
    protected $oneHundredRel;

    const ONE_HUNDRED_REL_NO       = 'no';
    const ONE_HUNDRED_REL_REQUIRED = 'required';
    const ONE_HUNGRED_REL_YES      = 'yes';

    /**
     * @var string
     */
    protected $aggregateMwi;

    /**
     * @var string
     */
    protected $trustIdInbound;

    /**
     * @var string
     */
    protected $trustIdOutbound;

    /**
     * @var string
     */
    protected $usePTime;

    /**
     * @var string
     */
    protected $useAVPF;

    /**
     * @var string
     */
    protected $mediaEncryption;

    const MEDIA_ENCRYPTION_NO   = 'no';
    const MEDIA_ENCRYPTION_SDES = 'sdes';
    const MEDIA_ENCRYPTION_DTLS = 'dtls';

    /**
     * @var string
     */
    protected $inbandProgress;

    /**
     * @var string
     */
    protected $callGroup;

    /**
     * @var string
     */
    protected $pickupGroup;

    /**
     * @var string
     */
    protected $namedCallGroup;

    /**
     * @var string
     */
    protected $namedPickupGroup;

    /**
     * @var int
     */
    protected $deviceStateBusyAt;

    /**
     * @var string
     */
    protected $faxDetect;

    /**
     * @var string
     */
    protected $t38Udptl;

    /**
     * @var string
     */
    protected $t38UdptlEc;

    const T38_UDPTL_EC_NONE       = 'none';
    const T38_UDPTL_EC_FEC        = 'fec';
    const T38_UDPTL_EC_REDUNDANCY = 'redundancy';

    /**
     * @var int
     */
    protected $t38UdptlMaxDatagram;

    /**
     * @var string
     */
    protected $t38UdptlNat;

    /**
     * @var string
     */
    protected $t38UdptlIpv6;

    /**
     * @var string
     */
    protected $toneZone;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $oneTouchRecording;

    /**
     * @var string
     */
    protected $recordOnFeature;

    /**
     * @var string
     */
    protected $recordOffFeature;

    /**
     * @var string
     */
    protected $rtpEngine;

    /**
     * @var string
     */
    protected $allowTransfer;

    /**
     * @var string
     */
    protected $allowSubscribe;

    /**
     * @var string
     */
    protected $sdpOwner;

    /**
     * @var string
     */
    protected $sdpSession;

    /**
     * @var string
     */
    protected $tosAudio;

    /**
     * @var string
     */
    protected $tosVideo;

    /**
     * @var int
     */
    protected $subMinExpiry;

    /**
     * @var string
     */
    protected $fromDomain;

    /**
     * @var string
     */
    protected $fromUser;

    /**
     * @var string
     */
    protected $mwiFromUser;

    /**
     * @var string
     */
    protected $dtlsVerify;

    /**
     * @var string
     */
    protected $dtlsRekey;

    /**
     * @var string
     */
    protected $dtlsCertFile;

    /**
     * @var string
     */
    protected $dtlsPrivateKey;

    /**
     * @var string
     */
    protected $dtlsCipher;

    /**
     * @var string
     */
    protected $dtlsCaFile;

    /**
     * @var string
     */
    protected $dtlsCaPath;

    /**
     * @var string
     */
    protected $dtlsSetup;

    const DTLS_SETUP_ACTIVE  = 'active';
    const DTLS_SETUP_PASSIVE = 'passive';
    const DTLS_SETUP_ACTPASS = 'actpass';

    /**
     * @var string
     */
    protected $srtpTag32;

    /**
     * @var string
     */
    protected $mediaAddress;

    /**
     * @var string
     */
    protected $redirectMethod;

    const REDIRECT_METHOD_USER     = 'user';
    const REDIRECT_METHOD_URICORE  = 'uri_core';
    const REDIRECT_METHOD_URIPJSIP = 'uri_pjsip';

    /**
     * @var string
     */
    protected $setVar;

    /**
     * @var int
     */
    protected $cosAudio;

    /**
     * @var int
     */
    protected $cosVideo;

    /**
     * @var string
     */
    protected $messageContext;

    /**
     * @var string
     */
    protected $forceAvp;

    /**
     * @var string
     */
    protected $mediaUserReceivedTransport;

    /**
     * @var string
     */
    protected $accountCode;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $accountCode
     * @return Endpoint
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * @param string $aggregateMwi
     * @return Endpoint
     */
    public function setAggregateMwi($aggregateMwi)
    {
        $this->aggregateMwi = $aggregateMwi;
        return $this;
    }

    /**
     * @return string
     */
    public function getAggregateMwi()
    {
        return $this->aggregateMwi;
    }

    /**
     * @param string $allow
     * @return Endpoint
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * @param string $allowSubscribe
     * @return Endpoint
     */
    public function setAllowSubscribe($allowSubscribe)
    {
        $this->allowSubscribe = $allowSubscribe;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSubscribe()
    {
        return $this->allowSubscribe;
    }

    /**
     * @param string $allowTransfer
     * @return Endpoint
     */
    public function setAllowTransfer($allowTransfer)
    {
        $this->allowTransfer = $allowTransfer;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowTransfer()
    {
        return $this->allowTransfer;
    }

    /**
     * @param string $aors
     * @return Endpoint
     */
    public function setAors($aors)
    {
        $this->aors = $aors;
        return $this;
    }

    /**
     * @return string
     */
    public function getAors()
    {
        return $this->aors;
    }

    /**
     * @param string $auth
     * @return Endpoint
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param string $callGroup
     * @return Endpoint
     */
    public function setCallGroup($callGroup)
    {
        $this->callGroup = $callGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallGroup()
    {
        return $this->callGroup;
    }

    /**
     * @param string $callerId
     * @return Endpoint
     */
    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallerId()
    {
        return $this->callerId;
    }

    /**
     * @param string $callerIdPrivacy
     * @return Endpoint
     */
    public function setCallerIdPrivacy($callerIdPrivacy)
    {
        $this->callerIdPrivacy = $callerIdPrivacy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallerIdPrivacy()
    {
        return $this->callerIdPrivacy;
    }

    /**
     * @param string $callerIdTag
     * @return Endpoint
     */
    public function setCallerIdTag($callerIdTag)
    {
        $this->callerIdTag = $callerIdTag;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallerIdTag()
    {
        return $this->callerIdTag;
    }

    /**
     * @param string $connectedLineMethod
     * @return Endpoint
     */
    public function setConnectedLineMethod($connectedLineMethod)
    {
        $this->connectedLineMethod = $connectedLineMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getConnectedLineMethod()
    {
        return $this->connectedLineMethod;
    }

    /**
     * @param string $context
     * @return Endpoint
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param int $cosAudio
     * @return Endpoint
     */
    public function setCosAudio($cosAudio)
    {
        $this->cosAudio = $cosAudio;
        return $this;
    }

    /**
     * @return int
     */
    public function getCosAudio()
    {
        return $this->cosAudio;
    }

    /**
     * @param int $cosVideo
     * @return Endpoint
     */
    public function setCosVideo($cosVideo)
    {
        $this->cosVideo = $cosVideo;
        return $this;
    }

    /**
     * @return int
     */
    public function getCosVideo()
    {
        return $this->cosVideo;
    }

    /**
     * @param int $deviceStateBusyAt
     * @return Endpoint
     */
    public function setDeviceStateBusyAt($deviceStateBusyAt)
    {
        $this->deviceStateBusyAt = $deviceStateBusyAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeviceStateBusyAt()
    {
        return $this->deviceStateBusyAt;
    }

    /**
     * @param string $directMedia
     * @return Endpoint
     */
    public function setDirectMedia($directMedia)
    {
        $this->directMedia = $directMedia;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectMedia()
    {
        return $this->directMedia;
    }

    /**
     * @param string $directMediaGlareMitigation
     * @return Endpoint
     */
    public function setDirectMediaGlareMitigation($directMediaGlareMitigation)
    {
        $this->directMediaGlareMitigation = $directMediaGlareMitigation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectMediaGlareMitigation()
    {
        return $this->directMediaGlareMitigation;
    }

    /**
     * @param string $directMediaMethod
     * @return Endpoint
     */
    public function setDirectMediaMethod($directMediaMethod)
    {
        $this->directMediaMethod = $directMediaMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectMediaMethod()
    {
        return $this->directMediaMethod;
    }

    /**
     * @param string $disableDirectMediaOnNat
     * @return Endpoint
     */
    public function setDisableDirectMediaOnNat($disableDirectMediaOnNat)
    {
        $this->disableDirectMediaOnNat = $disableDirectMediaOnNat;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisableDirectMediaOnNat()
    {
        return $this->disableDirectMediaOnNat;
    }

    /**
     * @param string $disallow
     * @return Endpoint
     */
    public function setDisallow($disallow)
    {
        $this->disallow = $disallow;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisallow()
    {
        return $this->disallow;
    }

    /**
     * @param string $dtlsCaFile
     * @return Endpoint
     */
    public function setDtlsCaFile($dtlsCaFile)
    {
        $this->dtlsCaFile = $dtlsCaFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsCaFile()
    {
        return $this->dtlsCaFile;
    }

    /**
     * @param string $dtlsCaPath
     * @return Endpoint
     */
    public function setDtlsCaPath($dtlsCaPath)
    {
        $this->dtlsCaPath = $dtlsCaPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsCaPath()
    {
        return $this->dtlsCaPath;
    }

    /**
     * @param string $dtlsCertFile
     * @return Endpoint
     */
    public function setDtlsCertFile($dtlsCertFile)
    {
        $this->dtlsCertFile = $dtlsCertFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsCertFile()
    {
        return $this->dtlsCertFile;
    }

    /**
     * @param string $dtlsCipher
     * @return Endpoint
     */
    public function setDtlsCipher($dtlsCipher)
    {
        $this->dtlsCipher = $dtlsCipher;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsCipher()
    {
        return $this->dtlsCipher;
    }

    /**
     * @param string $dtlsPrivateKey
     * @return Endpoint
     */
    public function setDtlsPrivateKey($dtlsPrivateKey)
    {
        $this->dtlsPrivateKey = $dtlsPrivateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsPrivateKey()
    {
        return $this->dtlsPrivateKey;
    }

    /**
     * @param string $dtlsRekey
     * @return Endpoint
     */
    public function setDtlsRekey($dtlsRekey)
    {
        $this->dtlsRekey = $dtlsRekey;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsRekey()
    {
        return $this->dtlsRekey;
    }

    /**
     * @param string $dtlsSetup
     * @return Endpoint
     */
    public function setDtlsSetup($dtlsSetup)
    {
        $this->dtlsSetup = $dtlsSetup;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsSetup()
    {
        return $this->dtlsSetup;
    }

    /**
     * @param string $dtlsVerify
     * @return Endpoint
     */
    public function setDtlsVerify($dtlsVerify)
    {
        $this->dtlsVerify = $dtlsVerify;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtlsVerify()
    {
        return $this->dtlsVerify;
    }

    /**
     * @param string $dtmfMode
     * @return Endpoint
     */
    public function setDtmfMode($dtmfMode)
    {
        $this->dtmfMode = $dtmfMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtmfMode()
    {
        return $this->dtmfMode;
    }

    /**
     * @param string $externalMediaAddress
     * @return Endpoint
     */
    public function setExternalMediaAddress($externalMediaAddress)
    {
        $this->externalMediaAddress = $externalMediaAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalMediaAddress()
    {
        return $this->externalMediaAddress;
    }

    /**
     * @param string $faxDetect
     * @return Endpoint
     */
    public function setFaxDetect($faxDetect)
    {
        $this->faxDetect = $faxDetect;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxDetect()
    {
        return $this->faxDetect;
    }

    /**
     * @param string $forceAvp
     * @return Endpoint
     */
    public function setForceAvp($forceAvp)
    {
        $this->forceAvp = $forceAvp;
        return $this;
    }

    /**
     * @return string
     */
    public function getForceAvp()
    {
        return $this->forceAvp;
    }

    /**
     * @param string $forceRport
     * @return Endpoint
     */
    public function setForceRport($forceRport)
    {
        $this->forceRport = $forceRport;
        return $this;
    }

    /**
     * @return string
     */
    public function getForceRport()
    {
        return $this->forceRport;
    }

    /**
     * @param string $fromDomain
     * @return Endpoint
     */
    public function setFromDomain($fromDomain)
    {
        $this->fromDomain = $fromDomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromDomain()
    {
        return $this->fromDomain;
    }

    /**
     * @param string $fromUser
     * @return Endpoint
     */
    public function setFromUser($fromUser)
    {
        $this->fromUser = $fromUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromUser()
    {
        return $this->fromUser;
    }

    /**
     * @param string $iceSupport
     * @return Endpoint
     */
    public function setIceSupport($iceSupport)
    {
        $this->iceSupport = $iceSupport;
        return $this;
    }

    /**
     * @return string
     */
    public function getIceSupport()
    {
        return $this->iceSupport;
    }

    /**
     * @param string $identifyBy
     * @return Endpoint
     */
    public function setIdentifyBy($identifyBy)
    {
        $this->identifyBy = $identifyBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifyBy()
    {
        return $this->identifyBy;
    }

    /**
     * @param string $inbandProgress
     * @return Endpoint
     */
    public function setInbandProgress($inbandProgress)
    {
        $this->inbandProgress = $inbandProgress;
        return $this;
    }

    /**
     * @return string
     */
    public function getInbandProgress()
    {
        return $this->inbandProgress;
    }

    /**
     * @param string $language
     * @return Endpoint
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $mailboxes
     * @return Endpoint
     */
    public function setMailboxes($mailboxes)
    {
        $this->mailboxes = $mailboxes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * @param string $mediaAddress
     * @return Endpoint
     */
    public function setMediaAddress($mediaAddress)
    {
        $this->mediaAddress = $mediaAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaAddress()
    {
        return $this->mediaAddress;
    }

    /**
     * @param string $mediaEncryption
     * @return Endpoint
     */
    public function setMediaEncryption($mediaEncryption)
    {
        $this->mediaEncryption = $mediaEncryption;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaEncryption()
    {
        return $this->mediaEncryption;
    }

    /**
     * @param string $mediaUserReceivedTransport
     * @return Endpoint
     */
    public function setMediaUserReceivedTransport($mediaUserReceivedTransport)
    {
        $this->mediaUserReceivedTransport = $mediaUserReceivedTransport;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaUserReceivedTransport()
    {
        return $this->mediaUserReceivedTransport;
    }

    /**
     * @param string $messageContext
     * @return Endpoint
     */
    public function setMessageContext($messageContext)
    {
        $this->messageContext = $messageContext;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageContext()
    {
        return $this->messageContext;
    }

    /**
     * @param string $mohSuggest
     * @return Endpoint
     */
    public function setMohSuggest($mohSuggest)
    {
        $this->mohSuggest = $mohSuggest;
        return $this;
    }

    /**
     * @return string
     */
    public function getMohSuggest()
    {
        return $this->mohSuggest;
    }

    /**
     * @param string $mwiFromUser
     * @return Endpoint
     */
    public function setMwiFromUser($mwiFromUser)
    {
        $this->mwiFromUser = $mwiFromUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getMwiFromUser()
    {
        return $this->mwiFromUser;
    }

    /**
     * @param string $namedCallGroup
     * @return Endpoint
     */
    public function setNamedCallGroup($namedCallGroup)
    {
        $this->namedCallGroup = $namedCallGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamedCallGroup()
    {
        return $this->namedCallGroup;
    }

    /**
     * @param string $namedPickupGroup
     * @return Endpoint
     */
    public function setNamedPickupGroup($namedPickupGroup)
    {
        $this->namedPickupGroup = $namedPickupGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamedPickupGroup()
    {
        return $this->namedPickupGroup;
    }

    /**
     * @param string $oneHundredRel
     * @return Endpoint
     */
    public function setOneHundredRel($oneHundredRel)
    {
        $this->oneHundredRel = $oneHundredRel;
        return $this;
    }

    /**
     * @return string
     */
    public function getOneHundredRel()
    {
        return $this->oneHundredRel;
    }

    /**
     * @param string $oneTouchRecording
     * @return Endpoint
     */
    public function setOneTouchRecording($oneTouchRecording)
    {
        $this->oneTouchRecording = $oneTouchRecording;
        return $this;
    }

    /**
     * @return string
     */
    public function getOneTouchRecording()
    {
        return $this->oneTouchRecording;
    }

    /**
     * @param string $outboundProxy
     * @return Endpoint
     */
    public function setOutboundProxy($outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->outboundProxy;
    }

    /**
     * @param string $outbountAuth
     * @return Endpoint
     */
    public function setOutbountAuth($outbountAuth)
    {
        $this->outbountAuth = $outbountAuth;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutbountAuth()
    {
        return $this->outbountAuth;
    }

    /**
     * @param string $pickupGroup
     * @return Endpoint
     */
    public function setPickupGroup($pickupGroup)
    {
        $this->pickupGroup = $pickupGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupGroup()
    {
        return $this->pickupGroup;
    }

    /**
     * @param string $recordOffFeature
     * @return Endpoint
     */
    public function setRecordOffFeature($recordOffFeature)
    {
        $this->recordOffFeature = $recordOffFeature;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordOffFeature()
    {
        return $this->recordOffFeature;
    }

    /**
     * @param string $recordOnFeature
     * @return Endpoint
     */
    public function setRecordOnFeature($recordOnFeature)
    {
        $this->recordOnFeature = $recordOnFeature;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordOnFeature()
    {
        return $this->recordOnFeature;
    }

    /**
     * @param string $redirectMethod
     * @return Endpoint
     */
    public function setRedirectMethod($redirectMethod)
    {
        $this->redirectMethod = $redirectMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectMethod()
    {
        return $this->redirectMethod;
    }

    /**
     * @param string $rewriteContact
     * @return Endpoint
     */
    public function setRewriteContact($rewriteContact)
    {
        $this->rewriteContact = $rewriteContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getRewriteContact()
    {
        return $this->rewriteContact;
    }

    /**
     * @param string $rtpEngine
     * @return Endpoint
     */
    public function setRtpEngine($rtpEngine)
    {
        $this->rtpEngine = $rtpEngine;
        return $this;
    }

    /**
     * @return string
     */
    public function getRtpEngine()
    {
        return $this->rtpEngine;
    }

    /**
     * @param string $rtpIpv6
     * @return Endpoint
     */
    public function setRtpIpv6($rtpIpv6)
    {
        $this->rtpIpv6 = $rtpIpv6;
        return $this;
    }

    /**
     * @return string
     */
    public function getRtpIpv6()
    {
        return $this->rtpIpv6;
    }

    /**
     * @param string $rtpSymmetric
     * @return Endpoint
     */
    public function setRtpSymmetric($rtpSymmetric)
    {
        $this->rtpSymmetric = $rtpSymmetric;
        return $this;
    }

    /**
     * @return string
     */
    public function getRtpSymmetric()
    {
        return $this->rtpSymmetric;
    }

    /**
     * @param string $sdpOwner
     * @return Endpoint
     */
    public function setSdpOwner($sdpOwner)
    {
        $this->sdpOwner = $sdpOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getSdpOwner()
    {
        return $this->sdpOwner;
    }

    /**
     * @param string $sdpSession
     * @return Endpoint
     */
    public function setSdpSession($sdpSession)
    {
        $this->sdpSession = $sdpSession;
        return $this;
    }

    /**
     * @return string
     */
    public function getSdpSession()
    {
        return $this->sdpSession;
    }

    /**
     * @param string $sendDiversion
     * @return Endpoint
     */
    public function setSendDiversion($sendDiversion)
    {
        $this->sendDiversion = $sendDiversion;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendDiversion()
    {
        return $this->sendDiversion;
    }

    /**
     * @param string $sendPai
     * @return Endpoint
     */
    public function setSendPai($sendPai)
    {
        $this->sendPai = $sendPai;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendPai()
    {
        return $this->sendPai;
    }

    /**
     * @param string $sendRpid
     * @return Endpoint
     */
    public function setSendRpid($sendRpid)
    {
        $this->sendRpid = $sendRpid;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendRpid()
    {
        return $this->sendRpid;
    }

    /**
     * @param string $setVar
     * @return Endpoint
     */
    public function setSetVar($setVar)
    {
        $this->setVar = $setVar;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetVar()
    {
        return $this->setVar;
    }

    /**
     * @param string $srtpTag32
     * @return Endpoint
     */
    public function setSrtpTag32($srtpTag32)
    {
        $this->srtpTag32 = $srtpTag32;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrtpTag32()
    {
        return $this->srtpTag32;
    }

    /**
     * @param int $subMinExpiry
     * @return Endpoint
     */
    public function setSubMinExpiry($subMinExpiry)
    {
        $this->subMinExpiry = $subMinExpiry;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubMinExpiry()
    {
        return $this->subMinExpiry;
    }

    /**
     * @param string $t38Udptl
     * @return Endpoint
     */
    public function setT38Udptl($t38Udptl)
    {
        $this->t38Udptl = $t38Udptl;
        return $this;
    }

    /**
     * @return string
     */
    public function getT38Udptl()
    {
        return $this->t38Udptl;
    }

    /**
     * @param string $t38UdptlEc
     * @return Endpoint
     */
    public function setT38UdptlEc($t38UdptlEc)
    {
        $this->t38UdptlEc = $t38UdptlEc;
        return $this;
    }

    /**
     * @return string
     */
    public function getT38UdptlEc()
    {
        return $this->t38UdptlEc;
    }

    /**
     * @param string $t38UdptlIpv6
     * @return Endpoint
     */
    public function setT38UdptlIpv6($t38UdptlIpv6)
    {
        $this->t38UdptlIpv6 = $t38UdptlIpv6;
        return $this;
    }

    /**
     * @return string
     */
    public function getT38UdptlIpv6()
    {
        return $this->t38UdptlIpv6;
    }

    /**
     * @param int $t38UdptlMaxDatagram
     * @return Endpoint
     */
    public function setT38UdptlMaxDatagram($t38UdptlMaxDatagram)
    {
        $this->t38UdptlMaxDatagram = $t38UdptlMaxDatagram;
        return $this;
    }

    /**
     * @return int
     */
    public function getT38UdptlMaxDatagram()
    {
        return $this->t38UdptlMaxDatagram;
    }

    /**
     * @param string $t38UdptlNat
     * @return Endpoint
     */
    public function setT38UdptlNat($t38UdptlNat)
    {
        $this->t38UdptlNat = $t38UdptlNat;
        return $this;
    }

    /**
     * @return string
     */
    public function getT38UdptlNat()
    {
        return $this->t38UdptlNat;
    }

    /**
     * @param string $timers
     * @return Endpoint
     */
    public function setTimers($timers)
    {
        $this->timers = $timers;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimers()
    {
        return $this->timers;
    }

    /**
     * @param int $timersMinSe
     * @return Endpoint
     */
    public function setTimersMinSe($timersMinSe)
    {
        $this->timersMinSe = $timersMinSe;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimersMinSe()
    {
        return $this->timersMinSe;
    }

    /**
     * @param int $timersSessExpires
     * @return Endpoint
     */
    public function setTimersSessExpires($timersSessExpires)
    {
        $this->timersSessExpires = $timersSessExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimersSessExpires()
    {
        return $this->timersSessExpires;
    }

    /**
     * @param string $toneZone
     * @return Endpoint
     */
    public function setToneZone($toneZone)
    {
        $this->toneZone = $toneZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getToneZone()
    {
        return $this->toneZone;
    }

    /**
     * @param string $tosAudio
     * @return Endpoint
     */
    public function setTosAudio($tosAudio)
    {
        $this->tosAudio = $tosAudio;
        return $this;
    }

    /**
     * @return string
     */
    public function getTosAudio()
    {
        return $this->tosAudio;
    }

    /**
     * @param string $tosVideo
     * @return Endpoint
     */
    public function setTosVideo($tosVideo)
    {
        $this->tosVideo = $tosVideo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTosVideo()
    {
        return $this->tosVideo;
    }

    /**
     * @param string $transport
     * @return Endpoint
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param string $trustIdInbound
     * @return Endpoint
     */
    public function setTrustIdInbound($trustIdInbound)
    {
        $this->trustIdInbound = $trustIdInbound;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrustIdInbound()
    {
        return $this->trustIdInbound;
    }

    /**
     * @param string $trustIdOutbound
     * @return Endpoint
     */
    public function setTrustIdOutbound($trustIdOutbound)
    {
        $this->trustIdOutbound = $trustIdOutbound;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrustIdOutbound()
    {
        return $this->trustIdOutbound;
    }

    /**
     * @param string $useAVPF
     * @return Endpoint
     */
    public function setUseAVPF($useAVPF)
    {
        $this->useAVPF = $useAVPF;
        return $this;
    }

    /**
     * @return string
     */
    public function getUseAVPF()
    {
        return $this->useAVPF;
    }

    /**
     * @param string $usePTime
     * @return Endpoint
     */
    public function setUsePTime($usePTime)
    {
        $this->usePTime = $usePTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsePTime()
    {
        return $this->usePTime;
    }

    /**
     * Return the TYPE as defined for PJSIP in Asterisk.
     *
     * @return string
     */
    public function getType()
    {
        return 'endpoint';
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(

        );
    }
}