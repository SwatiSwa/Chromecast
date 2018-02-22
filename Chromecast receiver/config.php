<?php

$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $get_array);
$playerId = $get_array['pli'];
$fmt = $get_array['fmt'];
$fbtag = $get_array['fbtag'];
$nol_forward = $fbtag == "true"? "0":"1";
$time = time();
$jsonPStart = '(function(){
	window.NOLCMB.GLCFG.PLDPR.initFromConfig(';
$jsonPEnd = ');
})(this)';

$str = ' 
	{
		"nol_GLOBALS":{

			"nol_host":"sp094",
			"nol_prefProtocol":"http",
			"nol_dma":"-1",
			"nol_deviceId":"",
			"nol_countryCode2":"XX",
			"nol_countryCode3":"xx",
           "nol_serverTime": "'.$time.'",
            "nol_errorURL":"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/error?message=|!(nol_errorMessage)!|,c13_|![nol_appid]!|,c16_|![nol_sdkv]!|,c8_|![nol_devGroup]!|,c7_|![nol_osGroup]!|,c10_|![nol_platform]!|,c17_|![nol_stationId]!|,c18_|![nol_assetid]!|,c6_|![nol_product]!|,ci_|![nol_clientid]!|",
				"nol_useroptUrl_lat":"http://priv-policy.imrworldwide.com/priv/|!nol_devicetype!|/|![nol_localeCountryCode]!|/|![nol_language]!|/optout.html",
				"nol_useroptUrl":"http://priv-policy.imrworldwide.com/priv/mobile/us/en/optout_legacy.html",
			"nol_emmURL":"nielsenwebid://nuid/64378b46-cb6c-4aee-83b1-888850247d21",
            "nol_playerId": "'.$playerId.'",
            "nol_bldv":"5.1.0.75-9",
            "nol_devGroup":"PHN",
            "nol_osver":"NA",
            "nol_clocksrc":"S",
            "nol_osGroup":"DROID",
            "nol_platform":"MBL",
			"nol_contentDistributor":"XX","nol_clientid":"us-506843","nol_vcid":"b01","nol_clientCMSmap":{"nol_testid":"testID","1":"nol_aggregate","nol_adLoadType":"adloadtype","nol_adobeId":"adobeId","nol_adURL":"fw:adurl","nol_agf1":"agf1","nol_agf2":"agf2","nol_agf3":"agf3","nol_airDate":"(airdate)","nol_assetid":"(assetid)","nol_assetName":"(section)","nol_category":"(program)","nol_censuscategory":"(censuscategory)","nol_channelName":"channelName","nol_clientid":"clientid","nol_cref3":"cref3","nol_crossRefID1":"crossId1","nol_crossRefID2":"crossId2","nol_dpr":"tv","nol_iagcategory":"fw:category","nol_isFullEpisode":"isfullepisode","nol_length":"length","nol_linearAdLoadFlag":"adModel","nol_mediaURL":"mediaURL","nol_ocrtag":"ocrtag","nol_provider":"(provider)","nol_reportSuiteID":"(reportSuite)","nol_segmentA":"(segA)","nol_segmentB":"(segB)","nol_segmentC":"((segC))","nol_stationType":"stationType","nol_tagSrc":"dataSrc","nol_title":"((title))","nol_vcid":"vcid","nol_vcTitle":"(title)","nol_vidtype":"type","nol_ottStatus":"ottStatus","nol_ottType":"ottType","nol_ottDevice":"ottDevice","nol_ottDeviceName":"ottDeviceName","nol_ottDeviceID":"ottDeviceID","nol_ottDeviceManufacturer":"ottDeviceManufacturer","nol_ottDeviceModel":"ottDeviceModel","nol_ottDeviceVersion":"ottDeviceVersion","nol_adSupportFlg":"hasAds"},
			"nol_cidOffsetNull":"00000",
			"nol_cidNull":"X100zdCIGeIlgZnkYj6UvQ==",
			"nol_caSeed":"2017Q2",
			"nol_tsvevt":"tsvupdate",
			"nol_md5Seed":"N!3ls3nBL",
				"nol_tsvURL":"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/tsv?id3=|!nol_id3Raw!|&fmt=jsonp&pli=|![nol_playerId]!|&segment1=|!nol_countryCode2!|&segment2=|!nol_dma!|&tsvevt=|![nol_tsvevt]!|&nmspc=NOLCMB",
			"nol_tsvBreakoutMap":{"enable":"00,01,02,03,04,05,06,07,08,09","disable":""},
			"nol_sdkDelimiter":"_",
            "nol_sfcode":"qat1",
	        "nol_dcrsfcode":"qat1",
            "nol_channelName":"defaultChannelName",
            "nol_fbver":"1",
            "nol_appid":"DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7",
            "nol_contentType":"content,radio",
			"nol_aqhDuration":"00000",
			"nol_aqhFBCountryCode":"AQHZZ",
			"nol_fbCountryCode":"ZZ",
			"nol_fbDma":"111",
			"nol_fbDmaDCR":"111",
			"nol_linearAdLoadFlag":"0",
			"nol_tagSrc":"cms",
			"nol_flag":"2",
			"nol_gpsPrecision":"1000",
			"nol_intrvlThrshld":"90",
			"nol_chnlCountThrshld":"10",
			"nol_cacheBusterLmt":"1",
			"nol_id3IntrvlGp":"15",
			"nol_useragent":"NLSDK (|![nol_osver]!|,|![nol_devtypeid]!| BUILD/|![nol_sdkver]!|) |![nol_appid]!|/|![nol_appver]!|",	
			"nol_xorSeed":"cr055pltfrm",
			"nol_unQualSegmentValue":"5",
			"nol_backgroundMode":"1",
 		    "nol_assetName": "defChnAsset",
			"nol_bgTimeOut":"5",
			"nol_duration":"30",
			"nol_encryptDevId":"true",
			"nol_SDKEncDevIdFlag":"true",
			"nol_devTimeZone":"GMT-10:00",
			"nol_apn":"QA_BrowserSDK",
			"nol_sdkv":"bj.5.0.0",
			"nol_suppress":"1",
			"nol_admeas":"0",
			"nol_maxStaticInstances": "5",	
			"nol_pendingPingsLimit" :"8",
			"nol_pendingPingsDelay":"1",
			"nol_staticType":"static,text",
			"nol_spFlag":"_P",
			"nol_pauseTimeout":"1800",
			"nol_maxRetry":"0",
			"nol_defReasonCode":"8",
			"nol_adSupportFlg":"2",
			"nol_eventDataDelimiter":"~",
			"nol_eventDataEvents":"play,pause,resume,stop,mute,rewind,forward",
			"nol_pauseEventTimeoutPlayhead":"15",
			"nol_lsid":"64378b46-cb6c-4aee-83b1-888850247d21",
        		"nol_provider":"defaultProvider",
				"nol_stnevt":"stnupdate",
	            "nol_stationId":"defaultStationId",  
	            "nol_stationURL":"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/stn?asset=|!(nol_assetid)!|&fmt=jsonp&pli=|![nol_playerId]!|&c13=DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&stnevt=|![nol_stnevt]!|&provider=|![nol_provider]!|&stationType=|![nol_stationType]!|&nmspc=NOLCMB",
	            "nol_weekStartUTC":"18000", 
	            "nol_weekEndUTC":"18000", 
	            "nol_startDayTimeOffset":"-18000", 
	            "nol_GMTOffset":"0", 
	            "nol_period":"0", 
	            "nol_week":"0", 
	            "nol_nextPeriod":"0", 
	            "nol_nextWeek":"0", 
            	"nol_nextWeekEndUTC":"18001",
		
			"nol_dcrVideoCustom" : "&abc=|![nol_testid]!|",

            
			"nol_id3Map":{
				"nol_nWebAddress":"0",
				"nol_pccid":"1",
				"nol_fdcid": "2",
				"nol_watermark":"3",
				"nol_pcoffset":"4",
				"nol_fdoffset":"5",
				"nol_breakout":"6"
			},

			"nol_customExtension":[
				"nol_dprCustom",
				"nol_legacyCustom",
				"nol_mtvrCustom",
				"nol_drmCustom",
				"nol_mtvraqhCustom",
				"nol_drmaqhCustom",
				"nol_dprid3Custom",
				"nol_dcrVideoCustom",			
				"nol_dcrStaticCustom",			
				"nol_dcrCustomEnc"
			],
			"nol_eventFilter":{
				"onCmsDetected":[
					{"tagVar":{"name":"nol_product", "value":"dpr"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"cms"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"cms"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"id3"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
          			{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_tsvFlag"], "is":{"type":"+", "value":"nol_tsvMap"}, "then":{"nol_disabled":"true"}},
                    {"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_breakout"], "is":{"type":"+", "value":"09"}, "then":{"nol_disabled":"false"}},
                    {"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_linearAdLoadFlag"], "is":{"type":"+", "value":"2"}, "then":{"nol_disabled":"false"}},
                    {"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
                    {"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"-", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
          			{"tagVar":{"name":"nol_product", "value":"mtvr"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"id3"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"false"}},
          			{"tagVar":{"name":"nol_product", "value":"mtvr"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"vc"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"id3"}, "then":{"nol_disabled":"true"}, "else":{"nol_disabled":"false"}},
					{"tagVar":{"name":"nol_product", "value":"ocr"}, "cond":["nol_vidtype"], "is":{"type":"+", "value":"preroll,midroll,postroll,ad"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					 
					{"tagVar":{"name":"nol_product","value":"dcrvideo"}, "cond": ["nol_vidtype"],  "is": {"type":"+","value": "content,preroll,midroll,postroll,ad"},  "then":{"nol_disabled": "false"}, "else": {"nol_disabled": "true"}},
					{"tagVar":{"name":"nol_product","value":"dcrstatic"},"cond":["nol_vidtype"], "is":{"type":"+", "value":"static"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}}
					
				],
				"onDcrCmsDetected":[
	                                {"tagVar":{"name":"nol_product","value":"dcrstatic"}, "cond": ["nol_ac"],  "is": {"type":"+","value": "static"},  "then":{"nol_disabled": "false"}, "else": {"nol_disabled": "true"}}
	            ],
				"onDcrDetected":{
					"dcrStatic":[
						{"tagVar":{"name":"nol_product","value":"dcrstatic"}, "cond": ["nol_vidtype"],  "is": {"type":"+","value": "preroll,midroll,postroll,ad,content"},  "then":{"nol_disabled": "true"}, "else":{"nol_disabled":"false"}}
					],
					"dcrVideo":[
						{"tagVar":{"name":"nol_product","value":"dcrvideo"}, "cond": ["nol_vidtype"],  "is": {"type":"+","value": "preroll,midroll,postroll,ad,content"},  "then":{"nol_disabled": "false"}, "else":{"nol_disabled":"true"}},
						{"tagVar":{"name":"nol_product","value":"dcrvideo"}, "cond": ["nol_vidtype"],  "is": {"type":"+","value": "postroll"},  "then":{"nol_minWonOverride": "1"}}
					]
				},
				 "onOTTDetected":[
				        {"tagVar":{"name":"nol_product_content", "value":"dcrvideo"}, "cond":["nol_pingCount_content"], "is":{"type":"+", "value":"1"}, "then":{"nol_pingCount_content":"0"}}
					],
				"onId3Detected":[
					{"tagVar":{"name":"nol_product", "value":"mtvr"}, "cond":["nol_vidtype"], "is":{"type":"+", "value":"content"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"false"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_tagSrc"], "is":{"type":"+", "value":"id3"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"id3"}, "cond":["nol_vidtype"], "is":{"type":"+", "value":"content"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"false"}},
					{"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_subTag", "value":"mtvr"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"-", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}}
				],
				"onViewWon":[
					{"tagVar":{"name":"nol_cadence", "value":"interval"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"S"}, "then":{"nol_segmentPrefix":"D"}},
					{"tagVar":{"name":"nol_cadence", "value":"interval"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"D"}, "then":{"nol_at":"timer"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_dpr"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"D"}, "then":{"nol_fbCountryCode":"ZZ"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_drm"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"D"}, "then":{"nol_fbCountryCode":"ZZ"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_mtvr"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"D"}, "then":{"nol_fbCountryCode":"ZZ"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_drm"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"V"}, "then":{"nol_fbCountryCode":"IMPZZ"}}
				],
				"onAssetIdChanged":[
					{"tagVar":{"name":"nol_product", "value":"dpr"}, "cond":["nol_vidtype"], "is":{"type":"-", "value":"content"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_vidtype"], "is":{"type":"-", "value":"content"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dpr"}, "cond":["nol_assetid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dpr"}, "cond":["nol_dpr"], "is":{"type":"+", "value":"true"}, "then":{"nol_forward":"0","nol_aggregate":"1"}, "else":{"nol_forward":"0","nol_aggregate":"0"}},
					{"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_vidtype"], "is":{"type":"-", "value":"radio"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_assetid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"ocr"}, "cond":["nol_ocrtag"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}, "else":{"nol_disabled":"false"}},
					{"tagVar":{"name":"nol_cadence", "value":"streamduration"}, "cond": ["nol_ac"],  "is": {"type":"+","value": "ad"},  "then":{"nol_disabled": "false"}, "else":{"nol_disabled": "true"}}
				],
				"onId3FdCidChanged":[
					{"tagVar":{"name":"nol_product", "value":"mtvr"}, "cond":["nol_fdcid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_fdcid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}}
				],
				"onId3PcCidChanged":[
					{"tagVar":{"name":"nol_subTag", "value":"mtvr"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}, "else":{"nol_disabled":"false", "nol_forward":"0","nol_aggregate":"1"}},
					{"tagVar":{"name":"nol_subTag", "value":"mtvr"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"-", "value":"nol_cidNull"}, "then":{"nol_forward":"0","nol_aggregate":"0"},"else":{"nol_forward":"0","nol_aggregate":"1"}},
					{"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}}
				],
				"nol_tagFilter":[
					{"tagVar":{"name":"nol_product", "value":"mtvr"}, "cond":["nol_fdcid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_fdcid"], "is":{"type":"+", "value":""}, "then":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_subTag", "value":"mtvr"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}, "else":{"nol_disabled":"false", "nol_forward":"0","nol_aggregate":"1"}},
					{"tagVar":{"name":"nol_subTag", "value":"mtvr"}, "cond":["nol_pccid","nol_fdcid"], "is":{"type":"-", "value":"nol_cidNull"}, "then":{"nol_forward":"0","nol_aggregate":"0"},"else":{"nol_forward":"0","nol_aggregate":"1"}},
					{"tagVar":{"name":"nol_subTag", "value":"dprid3"}, "cond":["nol_pccid"], "is":{"type":"+", "value":"nol_cidNull"}, "then":{"nol_disabled":"true"}} 
				],
                    "onWeekEndUTC":[
                     {"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_week"], "is":{"type":"+", "value":"0"}, "then":{"nol_week":"0"}},
                     {"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_period"], "is":{"type":"+", "value":"0"}, "then":{"nol_period":"0"}},
                     {"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_weekStartUTC"], "is":{"type":"+", "value":"18000"}, "then":{"nol_weekStartUTC":"18000"}},
                     {"tagVar":{"name":"nol_product", "value":"drm"}, "cond":["nol_weekEndUTC"], "is":{"type":"+", "value":"18000"}, "then":{"nol_weekEndUTC":"18001"}}
                    ],
				"onComplete":[
					{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_breakout"], "is":{"type":"+", "value":"03"}, "then":{"nol_tsvMap":"00,01,02,03,04"}, "else":{"nol_tsvMap":"00,01,02,03,04,05,06,07,08"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_dpr"}, "cond":["nol_aggregate"], "is":{"type":"+", "value":"1"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},                                                                              
					{"tagVar":{"name":"nol_subProduct", "value":"fb_drm"}, "cond":["nol_aggregate"], "is":{"type":"+", "value":"1"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_mtvr"}, "cond":["nol_aggregate"], "is":{"type":"+", "value":"1"}, "then":{"nol_disabled":"false"}, "else":{"nol_disabled":"true"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_dpr"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"S"}, "then":{"nol_fbCountryCode":"IMPZZ"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_drm"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"S"}, "then":{"nol_fbCountryCode":"ZZ"}},
					{"tagVar":{"name":"nol_subProduct", "value":"fb_mtvr"}, "cond":["nol_segmentPrefix"], "is":{"type":"+", "value":"S"}, "then":{"nol_fbCountryCode":"IMPZZ"}}										
				],
				"onPaginateDetected":[
				    {"tagVar":{"name":"nol_product","value":"dcrstatic"}, "cond":["nol_pingCount"],  "is": {"type":"-","value": "0"}, "then":{"nol_pingCount": "0"}}
				],
				"onEndDetected":[
				                 
				                 {"tagVar":{"name":"nol_product","value":"dcrvideo"}, "cond": ["nol_davty"],  "is": {"type":"+","value": "1"},  "then":{"nol_davty": "2"}},
				                 {"tagVar":{"name":"nol_product","value":"dcrstatic"}, "cond": ["nol_davty"],  "is": {"type":"+","value": "1"},  "then":{"nol_davty": "2"}}
				],
	            "onAdLoadFlag": [
	         				    { "tagVar": { "name": "nol_product", "value": "dcrvideo" }, "cond": ["nol_adLoadType"], "is": { "type": "+", "value": "dynamic" }, "then": { "nol_adLoadType": "2" } },
	         				    { "tagVar": { "name": "nol_product", "value": "dcrvideo" }, "cond": ["nol_adLoadType"], "is": { "type": "+", "value": "linear" }, "then": { "nol_adLoadType": "1" } },
	         				    { "tagVar": { "name": "nol_product", "value": "dcrvideo" }, "cond": ["nol_adLoadType"], "is": { "type": "-", "value": "1,2" }, "then": { "nol_adLoadType": "2" } },
	         					{ "tagVar": { "name": "nol_subProduct", "value": "fb" }, "cond": ["nol_adLoadType"], "is": { "type": "+", "value": "1" }, "then": { "nol_disabled": "true" }, "else": { "nol_disabled": "false" } }
	         	            ]
				
				 
			  },
			 
			  "nol_serviceFilter": {
					"tsv": [
						{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_tsvFlag"], "is":{"type":"+", "value":"nol_tsvMap"}, "then":{"nol_disabled":"true"}},
						{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_breakout"], "is":{"type":"+", "value":"09"}, "then":{"nol_disabled":"false"}},
						{"tagVar":{"name":"nol_product", "value":"dprid3"}, "cond":["nol_linearAdLoadFlag"], "is":{"type":"+", "value":"2"}, "then":{"nol_disabled":"false"}}
					],
					"stn": []
			},
			"nol_tagMap":{
				"nol_product":["dpr","mtvr","vc", "id3", "ocr", "drm", "dprid3","dcrstatic", "dcrvideo"], 
				"nol_cadence":["interval", "episode", "stream", "impression", "daypart", "appstart","streamduration"],  
				"nol_defaults":{
					"nol_creditFlag":"1",
					"nol_creditValue":"30",
					"nol_segmentLength":"5",
					"nol_segmentValue":"60",
					"nol_maxLength":"1832",
					"nol_forward":"0",
					"nol_aggregate":"1",
					"nol_tsvFlag":"99",
					"nol_rt":"video",
					"nol_accessMethod":"0",
					"nol_breakout":"00",
					"nol_currSeg":"0",
					"nol_minWonOverride":"0",
					"nol_segmentA":"NA",
					"nol_segmentB":"NA",
					"nol_segmentC":"NA",
					"nol_placement":"NA",
					"nol_content":"NA",
					"nol_adLoadType":"2",
					"nol_segmentTimeSpent":"0",
					"nol_adDuration":"0",
					"nol_adCount":"0",
					"nol_isFullEpisode":"n",
					"nol_sendTime":"0",
					"nol_davty":"0"
				},
				"nol_url":[
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&sd=|![nol_length]!|&forward=|![nol_forward]!|&tl=|![nol_title]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_caSeed!|&pc=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid!|&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration!|&segment1=|!(nol_countryCode3)!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&cg=|![nol_category]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&h33=|![nol_flag]!|&c26=dmap,1&c27=cln,|![nol_segmentTimeSpent]!|&at=|!nol_at!|&rt=|!nol_rt!|&st=dpr|![nol_dprCustom]!|&c24=zip,0&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/m?ci=|!nol_clientidVC||nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&c6=|!nol_product!|,|!nol_vcidVC||nol_vcid!|&c3=|![nol_c3]!|&cg=|![nol_censuscategory||nol_category]!|&tl=dav|![nol_davState]!|-|![nol_vcTitle]!|&c9=devid,|![nol_deviceId]!||![nol_iagData]!|&c10=plt,MBL&c26=dmap,1|![nol_legacyCustom]!|&c24=zip,0&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&forward=|![nol_forward]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|![nol_cidPrefix]+nol_pccid!|&pc=DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]!|&segment1=|!nol_countryCode3!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&c14=osver,NA&h33=|![nol_flag]!|&c26=dmap,1&c27=cln,|![nol_segmentTimeSpent]!|&at=|!nol_at!|&rt=|!nol_rt!|&st=mtvr&vn=1|![nol_mtvrCustom]!|&c24=zip,0&dd=|![nol_dataDate]!|&hrd=|![nol_hourCode]!|&wkd=|![nol_dayId]!|&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&forward=|![nol_forward]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|![nol_cidPrefix]+nol_fdcid!|&pc=DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]!|&segment1=|!nol_countryCode3!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&c14=osver,NA&h33=|![nol_flag]!|&c26=dmap,1&c27=cln,|![nol_segmentTimeSpent]!|&at=|!nol_at!|&rt=|!nol_rt!|&st=mtvr&vn=1|![nol_mtvrCustom]!|&c24=zip,0&dd=|![nol_dataDate]!|&hrd=|![nol_hourCode]!|&wkd=|![nol_dayId]!|&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/trans?ci=|![nol_clientid]!|&forward=|![nol_forward]!|&pc=DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c6=|!nol_product!|,|![nol_vcid]!|&segment1=|![nol_countryCode3]!|&segment2=|![nol_dma]!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c14=osver,NA&tp=|![nol_id3Data]!|&channame=|!(nol_channelName)!|&h33=|![nol_flag]!|&c26=dmap,1&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_ocrtag!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&c7=osgrp,DROID&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c26=dmap,1&c24=zip,0&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"https://www.facebook.com/brandlift.php?campaign_id=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_caSeed}!|&content_id=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}!|&segment_code=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}!|&creative_id=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}!|&placement_id=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_fbDma!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&h=|![<{nol_md5Seed+{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_caSeed}+{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}+{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}+(nol_fbCountryCode)+(nol_fbDma)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+[nol_appid]+([nol_segmentTimeSpent])}.0,10>]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{[nol_cidPrefix]+nol_pccid}!|&segment_code=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]}!|&placement_id=|!{nol_appid}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_dma!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&day_id=|![nol_dayId]!|&hour_id=|![nol_hourCode]!|&data_date=|![nol_dataDate]!|&h=|![<{nol_md5Seed+{[nol_cidPrefix]+nol_pccid}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]}+{nol_appid}+(nol_fbCountryCode)+(nol_dma)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+[nol_appid]+([nol_segmentTimeSpent])+([nol_dayId])+([nol_hourCode])+([nol_dataDate])}.0,10>]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{[nol_cidPrefix]+nol_fdcid}!|&segment_code=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]}!|&placement_id=|!{nol_appid}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_dma!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&day_id=|![nol_dayId]!|&hour_id=|![nol_hourCode]!|&data_date=|![nol_dataDate]!|&h=|![<{nol_md5Seed+{[nol_cidPrefix]+nol_fdcid}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration+nol_sdkDelimiter+[nol_linearAdLoadFlag]}+{nol_appid}+(nol_fbCountryCode)+(nol_dma)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+[nol_appid]+([nol_segmentTimeSpent])+([nol_dayId])+([nol_hourCode])+([nol_dataDate])}.0,10>]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&forward=|![nol_forward]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|!nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]!|&pc=|!nol_weekQhr!|&cr=|!nol_localDay+nol_sdkDelimiter+nol_dayQhr+nol_sdkDelimiter+nol_segmentPrefix+nol_sdkDelimiter+nol_duration!|&segment1=|!(nol_countryCode3)!|&segment2=|!nol_metro!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&c17=stnid,|![(nol_stationId)]!|&c18=clb,|![(nol_assetid)]!|&c19=stntyp,|![nol_stationType]!|&c20=prvd,|![nol_provider]!|&c26=dmap,1&at=|!nol_at!|&rt=|!nol_rt!|&st=drm|![nol_drmCustom]!|&c24=zip,99&c27=cln,|![nol_segmentTimeSpent]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]}!|&segment_code=|!{nol_localDay+nol_sdkDelimiter+nol_dayQhr+nol_sdkDelimiter+nol_segmentPrefix+nol_sdkDelimiter+nol_duration}!|&placement_id=|!{nol_weekQhr}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_metro!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&h=|![<{nol_md5Seed+{nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]}+{nol_localDay+nol_sdkDelimiter+nol_dayQhr+nol_sdkDelimiter+nol_segmentPrefix+nol_sdkDelimiter+nol_duration}+{nol_weekQhr}+(nol_fbCountryCode)+(nol_metro)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+[nol_appid]+([nol_segmentTimeSpent])}.0,10>]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&forward=|![nol_forward]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|![nol_cidPrefix]+nol_fdcid!|&pc=DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&aqhflg=1&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_wmDayQhr+nol_sdkDelimiter+nol_wmDay+nol_sdkDelimiter+[nol_linearAdLoadFlag]!|&segment1=|!nol_countryCode3!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c16=sdkv,bj.5.0.0&h33=|![nol_flag]!|&c26=dmap,1&at=|!nol_at!|&rt=|!nol_rt!|&st=mtvr&vn=1|![nol_mtvraqhCustom]!|&c24=zip,0&dd=|![nol_dataDate]!|&hrd=|![nol_hourCode]!|&wkd=|![nol_dayId]!|&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{[nol_cidPrefix]+nol_fdcid}!|&segment_code=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_wmDayQhr+nol_sdkDelimiter+nol_wmDay+nol_sdkDelimiter+[nol_linearAdLoadFlag]}!|&placement_id=|!{nol_appid}!|&segment1=|!nol_aqhFBCountryCode!|&segment2=|!nol_dma!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&day_id=|![nol_dayId]!|&hour_id=|![nol_hourCode]!|&data_date=|![nol_dataDate]!|&h=|![<{nol_md5Seed+{[nol_cidPrefix]+nol_fdcid}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_wmDayQhr+nol_sdkDelimiter+nol_wmDay+nol_sdkDelimiter+[nol_linearAdLoadFlag]}+{nol_appid}+(nol_aqhFBCountryCode)+(nol_dma)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+[nol_appid]+([nol_dayId])+([nol_hourCode])+([nol_dataDate])}.0,10>]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&forward=|![nol_forward]!|&c6=|!nol_product!|,|![nol_vcid]!|&ca=|!nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]!|&pc=|!nol_weekQhr!|&aqhflg=1&cr=|!nol_localDay+nol_sdkDelimiter+nol_segmentPrefix+nol_dayQhr+nol_sdkDelimiter+nol_aqhDuration!|&segment1=|!(nol_countryCode3)!|&segment2=|!nol_metro!|&c9=devid,|![nol_deviceId]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c16=sdkv,bj.5.0.0&c17=stnid,|![(nol_stationId)]!|&c18=clb,|![(nol_assetid)]!|&c19=stntyp,|![nol_stationType]!|&c20=prvd,|![nol_provider]!|&c26=dmap,1&at=|!nol_at!|&rt=|!nol_rt!|&st=drm|![nol_drmaqhCustom]!|&c24=zip,99&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]}!|&segment_code=|!{nol_localDay+nol_sdkDelimiter+nol_segmentPrefix+nol_dayQhr+nol_sdkDelimiter+nol_aqhDuration}!|&placement_id=|!{nol_weekQhr}!|&appid=|![nol_appid]!|&segment1=|!nol_aqhFBCountryCode!|&segment2=|!nol_metro!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&h=|![<{nol_md5Seed+{nol_stationId+nol_sdkDelimiter+nol_period+nol_sdkDelimiter+nol_week+nol_sdkDelimiter+[nol_contentDistributor]}+{nol_localDay+nol_sdkDelimiter+nol_segmentPrefix+nol_dayQhr+nol_sdkDelimiter+nol_aqhDuration}+{nol_weekQhr}+[nol_appid]+(nol_aqhFBCountryCode)+(nol_metro)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])}.0,10>]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&sd=|![nol_length]!|&forward=|![nol_forward]!|&tl=|![nol_title]!|&c6=dpr,|![nol_vcid]!|&ca=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_caSeed!|&pc=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid!|&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration!|&segment1=|!(nol_countryCode3)!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&cg=|![nol_category]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&c21=fpid,|![nol_pccid]!|&c22=laf,|![nol_linearAdLoadFlag]!|&h33=|![nol_flag]!|&c26=dmap,1&c27=cln,|![nol_segmentTimeSpent]!|&at=|!nol_at!|&rt=|!nol_rt!|&st=dpr|![nol_dprid3Custom]!|&c24=zip,0&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/d?ci=|!nol_clientid!|&c29=plid,14937953698711789&c30=bldv,5.1.0.75-9&sd=|![nol_length]!|&forward=|![nol_forward]!|&tl=|![nol_title]!|&c6=dpr,|![nol_vcid]!|&ca=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_caSeed!|&pc=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid!|&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration!|&segment1=|!(nol_countryCode3)!|&segment2=|!nol_dma!|&c9=devid,|![nol_deviceId]!|&cg=|![nol_category]!|&c8=devgrp,PHN&c7=osgrp,DROID&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&c10=plt,MBL&c11=agg,|!nol_aggregate!|&c12=apv,&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c14=osver,NA&c15=apn,|![nol_apn]!|&c16=sdkv,bj.5.0.0&c21=fpid,|![nol_fdcid]!|&c22=laf,|![nol_linearAdLoadFlag]!|&h33=|![nol_flag]!|&c26=dmap,1&c27=cln,|![nol_segmentTimeSpent]!|&at=|!nol_at!|&rt=|!nol_rt!|&st=dpr|![nol_dprid3Custom]!|&c24=zip,0&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&df=|![nol_defReasonCode]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/gn?prd=dcr&ci=|!nol_clientid!|&ch=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetName+[nol_spFlag]!|&asn=|!nol_assetName!|&prv=1&c6=vc,|![nol_vcid]!|&ca=|!nol_content!|&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c32=segA,|![nol_segmentA]!|&c33=segB,|![nol_segmentB]!|&c34=segC,|![nol_segmentC]!|&c15=apn,|![nol_apn]!|&sup=1&segment2=|!nol_dma!|&segment1=|!(nol_countryCode3)!|&forward=|![nol_forward]!|&ad=|!nol_accessMethod!|&cr=|!nol_segmentPrefix!|&c9=devid,|![nol_deviceId]!|&enc=|!nol_encryptDevId!|&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&at=|!nol_at!|&rt=|!nol_rt!|&c16=sdkv,|![nol_sdkv]!|&c27=cln,|![nol_segmentTimeSpent]!|&crs=|![nol_appCrash]!|&lat=|![nol_latitude]!|&lon=|![nol_longitude]!|&c29=plid,|![nol_playerId]!|&c30=bldv,|![nol_bldv]!|&st=dcr&c7=osgrp,|![nol_osGroup]!|&c8=devgrp,|![nol_devGroup]!|&c10=plt,|!([nol_platform])!|&c40=adbid,|![nol_adobeId]!|&c14=osver,|![(nol_osver)]!|&c26=dmap,1&dd=|![nol_dataDate]!|&hrd=|![nol_hourCode]!|&wkd=|![nol_dayId]!|&c35=adrsid,|![nol_reportSuiteID]!|&c36=cref1,|![nol_crossRefID1]!|&c37=cref2,|![nol_crossRefID2]!|&c11=agg,|!nol_aggregate!|&c12=apv,&c51=adl,|![nol_adDuration]!|&c52=noad,|![nol_adCount]!|&devtypid=|![nol_devtypeid]!|&pc=NA&c53=fef,|![nol_isFullEpisode]!|&c54=oad,|![nol_airDate]!|&c55=cref3,|![nol_cref3]!|&c57=adldf,|![nol_adLoadType]!|&ai=|![nol_assetid]!|&c3=|![nol_c3]!|&c64=starttm,|![nol_pingStartTimeUTC]!|&adid=|![nol_assetid]!|&c58=isLive,|![nol_isLive_content]!|&c59=sesid,|![nol_sessionId_content]!|&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c63=pipMode,|![nol_pipMode_content]!||![nol_dcrStaticCustom]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&c76=adbsnid,|![nol_adobeSessionId]!|&df=|![nol_defReasonCode]!|&sessionId=|![(nol_userSessionId)]!|&c44=progen,|![(nol_progen)]!|&davty=|![nol_davty_static]!|&si=|![(nol_pageURL)]!|&c66=mediaurl,|![(nol_mediaURL)]!|",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/gn?prd=dcr&ci=|!nol_clientid!|&ch=|!nol_clientid+nol_sdkDelimiter+nol_vcid+[nol_spFlag]!|&asn=|!nol_assetName_content!|&tl=|![nol_title_content]!|&prv=1&c6=vc,|![nol_vcid]!|&ca=|!nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid_content!|&cg=|![nol_category_content]!|&c13=asid,DHG163HR-BH45-JKY6-BKH7-67GJKY68GJK7&c32=segA,|![nol_segmentA_content]!|&c33=segB,|![nol_segmentB_content]!|&c34=segC,|![nol_segmentC_content]!|&c15=apn,|![nol_apn]!|&sup=1&segment2=|!nol_dma!|&segment1=|!(nol_countryCode3)!|&forward=|![nol_forward]!|&ad=|!nol_accessMethod!|&cr=|!nol_tagPresence+nol_sdkDelimiter+nol_breakout_content+nol_sdkDelimiter+nol_tsvFlag_content+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg_content+nol_sdkDelimiter+nol_duration_content!|&c9=devid,|![nol_deviceId]!|&enc=|!nol_encryptDevId!|&c1=nuid,64378b46-cb6c-4aee-83b1-888850247d21&at=|!nol_at!|&rt=|!nol_rt!|&c16=sdkv,|![nol_sdkv]!|&c27=cln,|![nol_segmentTimeSpent_content]!|&crs=|![nol_appCrash]!|&lat=|![nol_latitude]!|&lon=|![nol_longitude]!|&c29=plid,|![nol_playerId]!|&c30=bldv,|![nol_bldv]!|&st=dcr&c7=osgrp,|![nol_osGroup]!|&c8=devgrp,|![nol_devGroup]!|&c10=plt,|!([nol_platform])!|&c40=adbid,|![nol_adobeId]!|&c14=osver,|![(nol_osver)]!|&c26=dmap,1&dd=|![nol_dataDate]!|&hrd=|![nol_hourCode]!|&wkd=|![nol_dayId]!|&c35=adrsid,|![nol_reportSuiteID]!|&c36=cref1,|![nol_crossRefID1_content]!|&c37=cref2,|![nol_crossRefID2_content]!|&c11=agg,|!nol_aggregate!|&c12=apv,&c51=adl,|![nol_segmentTimeSpent_ad]!|&c52=noad,|![nol_count_ad]!|&sd=|![nol_length_content]!|&devtypid=|![nol_devtypeid]!|&pc=NA&c53=fef,|![nol_isFullEpisode_content]!|&c54=oad,|![nol_airDate_content]!|&c55=cref3,|![nol_cref3]!|&c57=adldf,|![nol_adLoadType_content]!|&ai=|![nol_assetid_content]!|&c3=|![nol_c3]!|&c64=starttm,|![nol_pingStartTimeUTC]!|&adid=|![nol_assetid_content]!|&c58=isLive,|![nol_isLive_content]!|&c59=sesid,|![nol_sessionId]!|&c61=createtm,|![nol_createTime||nol_pingCreationTime]!|&c63=pipMode,|![nol_pipMode_content]!||![nol_dcrVideoCustom]!|&c62=sendTime,|![nol_sendTime]!|&nodeTM=|![nol_nodetm]!|&logTM=|![nol_logtm]!|&c73=phtype,&c74=dvcnm,&c76=adbsnid,|![nol_adobeSessionId]!|&df=|![nol_defReasonCode]!|&c77=adsuprt,|![nol_adSupportFlg_content]!|&evdata=|![(nol_eventData_content)]!|&c71=ottflg,|![nol_ottStatus_content]!|&c72=otttyp,|![nol_ottType_content]!|&sessionId=|![(nol_userSessionId)]!|&c44=progen,|![(nol_progen)]!|&davty=|![nol_davty_content]!|&si=|![(nol_pageURL_content)]!|&c66=mediaurl,|![(nol_mediaURL_content)]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{[nol_content]}!|&segment_code=|!{nol_segmentPrefix}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_fbDmaDCR!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&channel_asset=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetName+[nol_spFlag]}!|&segment_a=|!{[nol_segmentA]}!|&segment_b=|!{[nol_segmentB]}!|&segment_c=|!{[nol_segmentC]}!|&access_method=|!nol_accessMethod!|&impressions=|![nol_impressions]!|&app_launch=|![nol_applaunch]!|&ad_duration=|![nol_adDuration]!|&ad_count=|![nol_adCount]!|&day_id=|![nol_dayId]!|&hour_id=|![nol_hourCode]!|&data_date=|![nol_dataDate]!|&content_type=|![nol_rt]!|&placement_id=|!{[nol_placement]}!|&h=|![<{nol_md5Seed+{[nol_content]}+{nol_segmentPrefix}+(nol_fbCountryCode)+(nol_fbDmaDCR)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+([nol_appid])+([nol_segmentTimeSpent])+{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetName+[nol_spFlag]}+{[nol_segmentA]}+{[nol_segmentB]}+{[nol_segmentC]}+(nol_accessMethod)+([nol_impressions])+([nol_applaunch])+([nol_adDuration])+([nol_adCount])+([nol_dayId])+([nol_hourCode])+([nol_dataDate])+([nol_rt])+{[nol_placement]}}.0,10>]!|",
"https://www.facebook.com/brandlift.php?content_id=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}!|&segment_code=|!{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}!|&segment1=|!nol_fbCountryCode!|&segment2=|!nol_fbDmaDCR!|&segment3=|![nol_osGroup]!|&osversion=|![(nol_osver)]!|&device_type=|![nol_devGroup]!|&platform=|!([nol_platform])!|&advertiser_id=|![nol_deviceId]!|&media_type=|![nol_mediaType]!|&ver=|!([nol_fbver])!|&appid=|![nol_appid]!|&length=|![nol_segmentTimeSpent]!|&channel_asset=|!{nol_clientid+nol_sdkDelimiter+nol_vcid+[nol_spFlag]}!|&segment_a=|!{[nol_segmentA]}!|&segment_b=|!{[nol_segmentB]}!|&segment_c=|!{[nol_segmentC]}!|&access_method=|!nol_accessMethod!|&impressions=|![nol_impressions]!|&app_launch=|![nol_applaunch]!|&ad_duration=|![nol_segmentTimeSpent_ad]!|&ad_count=|![nol_count_ad]!|&day_id=|![nol_dayId]!|&hour_id=|![nol_hourCode]!|&data_date=|![nol_dataDate]!|&content_type=|![nol_rt]!|&placement_id=|!{[nol_placement]}!|&ad_supp=|![nol_adSupportFlg_content]!|&h=|![<{nol_md5Seed+{nol_clientid+nol_sdkDelimiter+nol_vcid+nol_sdkDelimiter+nol_assetid}+{nol_tagPresence+nol_sdkDelimiter+nol_breakout+nol_sdkDelimiter+nol_tsvFlag+nol_sdkDelimiter+nol_segmentPrefix+nol_currSeg+nol_sdkDelimiter+nol_duration}+(nol_fbCountryCode)+(nol_fbDmaDCR)+([nol_osGroup])+([nol_osver])+([nol_devGroup])+([nol_platform])+([nol_deviceId])+([nol_mediaType])+([nol_fbver])+([nol_appid])+([nol_segmentTimeSpent])+{nol_clientid+nol_sdkDelimiter+nol_vcid+[nol_spFlag]}+{[nol_segmentA]}+{[nol_segmentB]}+{[nol_segmentC]}+(nol_accessMethod)+([nol_impressions])+([nol_applaunch])+([nol_adDuration])+([nol_adCount])+([nol_dayId])+([nol_hourCode])+([nol_dataDate])+([nol_rt])+{[nol_placement]}+([nol_adSupportFlg_content])}.0,10>]!|",
"",
"|!nol_prefProtocol!|://secure-qat1.imrworldwide.com/cgi-bin/m?ci=|!nol_clientidVC||nol_clientid!|&js=1&cg=|!nol_assetName!|&ts=v60.js&vn=|![nol_bldv]!|&cc=1&si=|![(nol_pageURL)]!|&rp=|![(nol_referrerURL)]!|&id=|![nol_lstrg]!|",

""
      
				]
			}
		},
		"nol_TAGS":[
						{
						      "nol_comment": "DCR Video view",
						      "nol_product": "8",
						      "nol_cadence": "3",
						      "nol_defaults":{"nol_maxPingCount":"1", "nol_creditFlag":"0","nol_segmentPrefix":"V","nol_timer":"nol_cmsoffset","nol_at":"view","nol_rt": "video","nol_tagPresence":"4","nol_c3":"st,c","nol_davty":"0"},
						      "nol_url": "18"
						},
						{
							"nol_comment":"DCR Video duration",
							"nol_product":"8",
							"nol_cadence":"0",
							"nol_eventDataEnabled": "true",
							"nol_defaults":{"nol_minWonOverride":"1","nol_creditFlag":"1","nol_segmentPrefix":"D","nol_timer":"nol_cmsoffset","nol_at":"timer","nol_rt": "video","nol_tagPresence":"4","nol_c3":"st,c","nol_davty":"1"},
						      	"nol_url": "18"
						},
						
						{
							"nol_comment":"DCR browser static view",
							"nol_product":"7",
							"nol_cadence":"3",
							"nol_defaults":{"nol_maxPingCount":"1", "nol_creditFlag":"0", "nol_segmentPrefix":"V", "nol_timer":"nol_pageoffset","nol_at":"view", "nol_tagPresence":"4","nol_rt": "text","nol_segmentTimeSpent":"0","nol_adDuration":"0","nol_adCount":"0","nol_c3":"st,c","nol_davty":"0"},
							"nol_url":"17"
						},

						{
							"nol_comment":"DCR browser static duration",
							"nol_product":"7",
							"nol_cadence":"0",
							"nol_defaults":{"nol_minWonOverride":"1","nol_creditFlag":"1","nol_segmentPrefix":"D","nol_timer":"nol_pageoffset","nol_at":"timer","nol_rt": "text", "nol_tagPresence":"4","nol_segmentLength":"30","nol_segmentTimeSpent":"0","nol_adDuration":"0","nol_adCount":"0","nol_c3":"st,c","nol_davty":"1"},	
							"nol_url":"17"
						},
						
						{
							"nol_comment":"FB DCR static view",
							"nol_product":"7",
							"nol_cadence":"3",
							"nol_defaults":{"nol_maxPingCount":"1", "nol_creditFlag":"0", "nol_segmentPrefix":"V", "nol_subProduct":"fb", "nol_timer":"nol_pageoffset", "nol_mediaType":"dcr", "nol_tagPresence":"4", "nol_fbCountryCode":"ZZ","nol_rt": "text","nol_impressions":"1","nol_applaunch":"0","nol_adDuration":"0","nol_adCount":"0","nol_rfrmsk":"true"},
							"nol_url":"19"
						},
						{
							"nol_comment":"FB DCR static duration",
							"nol_product":"7",
							"nol_cadence":"0",
							"nol_defaults":{"nol_segmentLength":"30","nol_minWonOverride":"1","nol_creditFlag":"1", "nol_segmentPrefix":"D", "nol_subProduct":"fb", "nol_timer":"nol_pageoffset","nol_mediaType":"dcr",  "nol_tagPresence":"4", "nol_rt": "text", "nol_fbCountryCode":"ZZ","nol_impressions":"0","nol_applaunch":"0","nol_adDuration":"0","nol_adCount":"0","nol_rfrmsk":"true"},
							"nol_url":"19"
						},

						{
							"nol_comment":"FB DCR Video view",
							"nol_product":"8",
							"nol_cadence":"3",
							"nol_defaults":{"nol_maxPingCount":"1", "nol_creditFlag":"0",  "nol_segmentPrefix":"V", "nol_subProduct":"fb", "nol_timer":"nol_cmsoffset","nol_mediaType":"dcr", "nol_tagPresence":"4", "nol_rt": "video", "nol_fbCountryCode":"ZZ","nol_impressions":"1","nol_applaunch":"0","nol_rfrmsk":"true"},
							"nol_url":"20"
						},
												{
							"nol_comment":"FB DCR Video duration",
							"nol_product":"8",
							"nol_cadence":"0",
							"nol_defaults":{"nol_minWonOverride":"1","nol_creditFlag":"1", "nol_segmentPrefix":"D", "nol_subProduct":"fb", "nol_timer":"nol_cmsoffset", "nol_mediaType":"dcr", "nol_rt": "video", "nol_tagPresence":"4", "nol_fbCountryCode":"ZZ","nol_impressions":"0","nol_applaunch":"0","nol_rfrmsk":"true"},
							"nol_url":"20"
						},

					{
			                "nol_comment":"DCR MI browser static view",
			                "nol_product":"7",
			                "nol_cadence":"2",
			                "nol_defaults":{"nol_maxPingCount":"1", "nol_creditFlag":"0", "nol_segmentPrefix":"V", "nol_timer":"nol_pageoffset","nol_at":"view", "nol_tagPresence":"4","nol_rt": "text","nol_segmentTimeSpent":"0","nol_adDuration":"0","nol_adCount":"0","nol_c3":"st,c"},
			                "nol_url":"22"

					},				

						{
							"nol_comment":"DPR View",
							"nol_product":"0",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset" ,"nol_at":"view", "nol_tagPresence":"1"},
							"nol_url":"0"
						},

						{
							"nol_comment":"DPR duration",
							"nol_product":"0",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset","nol_at":"sfview", "nol_tagPresence":"1"},
							"nol_url":"0"
						},
						{
							"nol_comment":"DPR impression",
							"nol_product":"0",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_timer":"nol_cmsoffset","nol_at":"start" , "nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0", "nol_tagPresence":"1" },
							"nol_url":"0"
						},

						{
							"nol_comment":"FB DPR View",
							"nol_product":"0",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset" ,"nol_mediaType":"dpr", "nol_tagPresence":"1", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR duration",
							"nol_product":"0",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_dpr", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset" , "nol_mediaType":"dpr", "nol_tagPresence":"1", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR impression",
							"nol_product":"0",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subProduct":"fb_dpr", "nol_timer":"nol_cmsoffset","nol_mediaType":"dpr", "nol_tagPresence":"1", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR View Mocr Pipe",
							"nol_product":"0",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset" ,"nol_mediaType":"image", "nol_tagPresence":"1", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR duration Mocr Pipe",
							"nol_product":"0",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_dpr", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset" , "nol_mediaType":"image", "nol_tagPresence":"1", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR impression Mocr Pipe",
							"nol_product":"0",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subProduct":"fb_dpr", "nol_timer":"nol_cmsoffset", "nol_mediaType":"image", "nol_tagPresence":"1", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"MTVR View",
							"nol_product":"1",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_segmentPrefix":"V",  "nol_cidPrefix":"FD_","nol_sendQual":"1","nol_at":"view", "nol_tagPresence":"2"},
							"nol_url":"3"
						},
						{
							"nol_comment":"MTVR duration",
							"nol_product":"1",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S",  "nol_cidPrefix":"FD_", "nol_sendQual":"1", "nol_at":"sfview", "nol_tagPresence":"2"},
							"nol_url":"3"
						},
						{
							"nol_comment":"MTVR impression",
							"nol_product":"1",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I",  "nol_cidPrefix":"FD_", "nol_at":"start", "nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0", "nol_tagPresence":"2"},
							"nol_url":"3"
						},
						{
							"nol_comment":"MTVR subTag View",
							"nol_product":"1",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"mtvr", "nol_segmentPrefix":"V",  "nol_cidPrefix":"PC_", "nol_timer":"nol_pcoffset", "nol_sendQual":"1", "nol_at":"view", "nol_tagPresence":"2"},
							"nol_url":"2"
						},
						{
							"nol_comment":"MTVR subTag duration",
							"nol_product":"1",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_subTag":"mtvr", "nol_segmentPrefix":"S",  "nol_cidPrefix":"PC_", "nol_timer":"nol_pcoffset", "nol_sendQual":"1" ,"nol_at":"sfview", "nol_tagPresence":"2"},
							"nol_url":"2"
						},
						{
							"nol_comment":"MTVR subTag impression",
							"nol_product":"1",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subTag":"mtvr",  "nol_cidPrefix":"PC_", "nol_timer":"nol_pcoffset" ,"nol_at":"start", "nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0", "nol_tagPresence":"2"},
							"nol_url":"2"
						},
						{
							"nol_comment":"MTVR AQH View",
							"nol_product":"1",
							"nol_cadence":"4",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_segmentPrefix":"Q", "nol_cidPrefix":"FD_","nol_sendQual":"5","nol_segmentLength":"15", "nol_at":"view", "nol_tagPresence":"2"},
							"nol_url":"11"
						},
						{
							"nol_comment":"DPR ID3 PC View",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0", "nol_subTag":"dprid3", "nol_maxPingCount":"1", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_pcoffset" ,"nol_at":"view", "nol_tagPresence":"3"},
							"nol_url":"15"
						},
						{
							"nol_comment":"DPR ID3 PC duration",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_subTag":"dprid3", "nol_segmentPrefix":"S", "nol_sendQual":"1", "nol_timer":"nol_pcoffset","nol_at":"sfview", "nol_tagPresence":"3"},
							"nol_url":"15"
						},
						{
							"nol_comment":"DPR ID3 PC impression",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_subTag":"dprid3", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_timer":"nol_pcoffset","nol_at":"start" , "nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0", "nol_tagPresence":"3" },
							"nol_url":"15"
						},
						{
							"nol_comment":"DPR ID3 FD View",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_fdoffset" ,"nol_at":"view", "nol_tagPresence":"3"},
							"nol_url":"16"
						},
						{
							"nol_comment":"DPR ID3 FD duration",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_sendQual":"1", "nol_timer":"nol_fdoffset","nol_at":"sfview", "nol_tagPresence":"3"},
							"nol_url":"16"
						},
						{
							"nol_comment":"DPR ID3 FD impression",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_timer":"nol_fdoffset","nol_at":"start" , "nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0", "nol_tagPresence":"3" },
							"nol_url":"16"
						},
						{
							"nol_comment":"FB MTVR subTag View",
							"nol_product":"1",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"mtvr", "nol_subProduct":"fb_mtvr", "nol_segmentPrefix":"V",  "nol_cidPrefix":"PC_", "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"mtvr", "nol_tagPresence":"2", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"7"
						},
						{
							"nol_comment":"FB MTVR subTag duration",
							"nol_product":"1",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_subTag":"mtvr", "nol_subProduct":"fb_mtvr", "nol_segmentPrefix":"S",  "nol_cidPrefix":"PC_", "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"mtvr", "nol_tagPresence":"2", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"7"
						},
						{
							"nol_comment":"FB MTVR subTag impression",
							"nol_product":"1",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"mtvr", "nol_subProduct":"fb_mtvr","nol_segmentPrefix":"I", "nol_timer":"nol_pcoffset", "nol_mediaType":"mtvr", "nol_cidPrefix":"PC_", "nol_tagPresence":"2", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"7"
						},
						{
							"nol_comment":"FB MTVR View",
							"nol_product":"1",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_mtvr", "nol_segmentPrefix":"V",  "nol_cidPrefix":"FD_", "nol_sendQual":"1" , "nol_mediaType":"mtvr", "nol_tagPresence":"2", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"8"
						},
						{
							"nol_comment":"FB MTVR duration",
							"nol_product":"1",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_mtvr",  "nol_cidPrefix":"FD_", "nol_sendQual":"1" , "nol_mediaType":"mtvr", "nol_tagPresence":"2", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"8"
						},
						{
                            "nol_comment":"FB MTVR impression",
                            "nol_product":"1",
                            "nol_cadence":"3",
                            "nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subProduct":"fb_mtvr", "nol_mediaType":"mtvr", "nol_cidPrefix":"FD_",  "nol_tagPresence":"2", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
                            "nol_url":"8"
						},
						{
							"nol_comment":"FB MTVR AQH ",
			            	"nol_product":"1",
			            	"nol_cadence":"4",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_mtvr", "nol_segmentPrefix":"Q", "nol_cidPrefix":"FD_", "nol_sendQual":"5","nol_segmentLength":"15" , "nol_mediaType":"mtvr", "nol_tagPresence":"2", "nol_aqhFBCountryCode":"AQHZZ","nol_rfrmsk":"true"},
			            	"nol_url":"12"
						},
						{
							"nol_comment":"FB DPR ID3 View",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_fdoffset" ,"nol_mediaType":"dpr", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 duration",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_dpr", "nol_sendQual":"1", "nol_timer":"nol_fdoffset" , "nol_mediaType":"dpr", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 impression",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subProduct":"fb_dpr","nol_timer":"nol_fdoffset", "nol_mediaType":"dpr",  "nol_tagPresence":"3", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag View",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V",  "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"dpr", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag impression",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_subProduct":"fb_dpr","nol_segmentPrefix":"I", "nol_timer":"nol_pcoffset", "nol_mediaType":"dpr", "nol_tagPresence":"3", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag duration",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"S",  "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"dpr", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 View Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_fdoffset" ,"nol_mediaType":"image", "nol_tagPresence":"3",  "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 duration Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_dpr", "nol_sendQual":"1", "nol_timer":"nol_fdoffset" , "nol_mediaType":"image", "nol_tagPresence":"3",  "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 impression Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_subProduct":"fb_dpr", "nol_timer":"nol_fdsoffset", "nol_mediaType":"image", "nol_tagPresence":"3", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag View Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"1",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"V",  "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"image", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag duration Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"0",
							"nol_defaults":{"nol_creditFlag":"1", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_subProduct":"fb_dpr", "nol_segmentPrefix":"S",  "nol_timer":"nol_pcoffset", "nol_sendQual":"1" , "nol_mediaType":"image", "nol_tagPresence":"3", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
						{
							"nol_comment":"FB DPR ID3 subtag impression Mocr Pipe",
							"nol_product":"6",
							"nol_cadence":"3",
							"nol_defaults":{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_subTag":"dprid3", "nol_segmentPrefix":"I", "nol_subProduct":"fb_dpr", "nol_mediaType":"image", "nol_timer":"nol_pcoffset", "nol_tagPresence":"3", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
							"nol_url":"6"
						},
							{
								"nol_comment":"ID3 raw red herring",
								"nol_product":"3",
								"nol_cadence":"0",
								"nol_url":"4",
								"nol_defaults":{"nol_tagPresence":"2"},
				                "nol_flag":"2"
							},

							{
								"nol_comment":"Legacy tag",
								"nol_product":"2",
								"nol_cadence":"2",
								"nol_defaults":{"nol_maxPingCount":"1", "nol_timer":"nol_cmsoffset"},
								"nol_url":"1"
							},


						{
							"nol_comment":"DRM View Metro 1",
							"nol_product":"5",
							"nol_cadence":"1",
							"nol_defaults":	{"nol_creditFlag":"0","nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_maxPingCount":"1","nol_timer":"nol_cmsoffset", "nol_metro":"9999", "nol_at":"view"},
							"nol_url":"9"
						},
						{
							"nol_comment":"DRM duration Metro 1",
							"nol_product":"5",
							"nol_cadence":"0",
							"nol_defaults":	{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset", "nol_metro":"9999", "nol_at":"sfview"},
							"nol_url":"9"
						},
						{
							"nol_comment":"DRM impression Metro 1",
							"nol_product":"5",
							"nol_cadence":"3",
							"nol_defaults":	{"nol_creditFlag":"0", "nol_maxPingCount":"1", "nol_segmentPrefix":"I", "nol_timer":"nol_cmsoffset", "nol_metro":"9999", "nol_at":"start","nol_apn":"QA_BrowserSDK" ,"nol_sdkv":"bj.5.0.0"},
							"nol_url":"9"
						},
						{
                            "nol_comment":"DRM View AQH Metro 1",
                            "nol_product":"5",
                            "nol_cadence":"4",
                            "nol_defaults":{"nol_creditFlag":"0","nol_segmentPrefix":"Q", "nol_sendQual":"5", "nol_maxPingCount":"1","nol_timer":"nol_cmsoffset","nol_segmentLength":"15", "nol_metro":"9999", "nol_at":"view"},
                            "nol_url":"13"
						},
							{
								"nol_comment":"FB DRM View Metro 1",
								"nol_product":"5",
								"nol_cadence":"1",
								"nol_defaults":{"nol_creditFlag":"0","nol_maxPingCount":"1", "nol_subProduct":"fb_drm", "nol_segmentPrefix":"V", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset", "nol_metro":"9999" , "nol_mediaType":"dpr", "nol_fbCountryCode":"IMPZZ","nol_rfrmsk":"true"},
								"nol_url":"10"
							},
							{
								"nol_comment":"FB DRM duration Metro 1",
								"nol_product":"5",
								"nol_cadence":"0",
								"nol_defaults":{"nol_creditFlag":"1", "nol_segmentPrefix":"S", "nol_subProduct":"fb_drm", "nol_sendQual":"1", "nol_timer":"nol_cmsoffset", "nol_metro":"9999" , "nol_mediaType":"dpr", "nol_fbCountryCode":"ZZ","nol_rfrmsk":"true"},
								"nol_url":"10"
							},
							{
								"nol_comment":"FB DRM AQH Metro 1",
				            	"nol_product":"5",
				            	"nol_cadence":"4",
				            	"nol_defaults":{"nol_creditFlag":"0","nol_segmentPrefix":"Q", "nol_subProduct":"fb_drm", "nol_sendQual":"5", "nol_maxPingCount":"1","nol_timer":"nol_cmsoffset", "nol_segmentLength":"15", "nol_metro":"9999", "nol_at":"view" , "nol_mediaType":"dpr", "nol_aqhFBCountryCode":"AQHZZ","nol_rfrmsk":"true"},
				            	"nol_url":"14"
							},
						{
							"nol_comment":"OCR tag",
							"nol_product":"4",
							"nol_cadence":"3",
							"nol_defaults":{"nol_maxPingCount":"1", "nol_timer":"nol_cmsoffset"},
							"nol_url":"5"
						}

		]
	}
';

if($fmt == "json") {
	header("Content-Type: text/plain");
	echo $str;
} else {
	echo $jsonPStart.$str.$jsonPEnd;
}
