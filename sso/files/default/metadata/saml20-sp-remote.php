<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: http://simplesamlphp.org/docs/trunk/simplesamlphp-reference-sp-remote
 */

$metadata['http://newington.instructure.com/saml2'] =  array (
  'entityid' => 'http://newington.instructure.com/saml2',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:email',
  'simplesaml.attributes' => FALSE,
  'AssertionConsumerService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://canvas.newington.nsw.edu.au/saml_consume',
      'index' => 0,
    ),
    1 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://newington.test.instructure.com/saml_consume',
      'index' => 1,
    ),
    2 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://newington.beta.instructure.com/saml_consume',
      'index' => 1,
    ),
  ),
  'SingleLogoutService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://canvas.newington.nsw.edu.au/saml_logout',
      'index' => 0,
    ),
    1 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://newington.test.instructure.com/saml_logout',
      'index' => 1,
    ),
    2 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://newington.beta.instructure.com/saml_logout',
      'index' => 1,
    ),
  ),
);

$metadata['https://spaces.newington.nsw.edu.au'] = array (
  'entityid' => 'https://spaces.newington.nsw.edu.au',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'simplesaml.attributes' => FALSE,
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:email',
  'AssertionConsumerService' => 'https://spaces.newington.nsw.edu.au/saml/consume',
  'SingleLogoutService' => 'https://spaces.newington.nsw.edu.au/signout',
  // I don't know if the below two are needed
  // 'sign.authnrequest' => true,
  // 'privatekey' => 'server.pem',
);
$metadata['https://spacesbeta.newington.nsw.edu.au'] = array (
  'entityid' => 'https://spacesbeta.newington.nsw.edu.au',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'simplesaml.attributes' => FALSE,
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:email',
  'AssertionConsumerService' => 'https://spacesbeta.newington.nsw.edu.au/saml/consume',
  'SingleLogoutService' => 'https://spacesbeta.newington.nsw.edu.au/signout',
  // I don't know if the below two are needed
  // 'sign.authnrequest' => true,
  // 'privatekey' => 'server.pem',
);

$metadata['Synergetic Community Portal'] = array (
  'entityid' => 'Synergetic Community Portal',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'AssertionConsumerService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://community.newington.nsw.edu.au/login.aspx',
      'index' => 0,
    ),
    1 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://communitytest.newington.nsw.edu.au/login.aspx',
      'index' => 1,
    ),
    2 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://communitynew.newington.nsw.edu.au/login.aspx',
      'index' => 2,
    ),
  ),
  'simplesaml.attributes' => FALSE,
  'saml20.sign.response' => FALSE,
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:email',
);

$metadata['google.com'] = array(
  'entityid' => 'google.com',
  'AssertionConsumerService' => 'https://www.google.com/a/newington.nsw.edu.au/acs',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:emailAddress',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'simplesaml.attributes' => FALSE,
  // 'privatekey' => 'googleapps.pem',
  // 'certificate' => 'googleapps.crt',
);

$metadata['https://newington.sharefile.com/saml/info'] = array (
  'entityid' => 'https://newington.sharefile.com/saml/info',
  'AssertionConsumerService' => 'https://newington.sharefile.com/saml/acs',
  'simplesaml.nameidattribute' => 'mail',
  'simplesaml.attributes' => FALSE,
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:emailAddress',
);

$metadata['box.net'] = array (
  'entityid' => 'box.net',
  'AssertionConsumerService' => 'https://sso.services.box.net/sp/ACS.saml2',
  'simplesaml.nameidattribute' => 'mail',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:emailAddress',
);

$metadata['https://shib-sp.mediacore.tv'] = array (
  'entityid' => 'https://shib-sp.mediacore.tv',
  'simplesaml.nameidattribute' => 'mail',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:emailAddress',
  'authproc' => array(
   1 => array(
        'class' => 'saml:TransientNameID',
    ),
    2 => array(
        'class' => 'saml:PersistentNameID',
        'attribute' => 'eduPersonPrincipalName',
    ),
    3 => array(
        'class' => 'saml:AttributeNameID',
        'attribute' => 'mail',
        'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ),
    40 => array(
      'class' => 'core:AttributeMap',
      'sAMAccountName' => 'eduPersonPrincipalName'
    ),
    50 => array(
      'class' => 'core:AttributeMap',
      'name2urn'
    )
  ),

  'AssertionConsumerService' =>
    array (
      0 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
          'Location' => 'https://shib-sp.mediacore.tv/Shibboleth.sso/SAML2/POST',
        ),
      1 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
          'Location' => 'https://shib-sp.mediacore.tv/Shibboleth.sso/SAML2/Artifact',
        ),
    ),
  'SingleLogoutService' =>
    array (
      0 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
          'Location' => 'https://shib-sp.mediacore.tv/Shibboleth.sso/SLO/Redirect',
        ),
      1 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
          'Location' => 'https://shib-sp.mediacore.tv/Shibboleth.sso/SLO/POST',
        ),
      2 =>
        array (
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
          'Location' => 'https://shib-sp.mediacore.tv/Shibboleth.sso/SLO/Artifact',
        ),
      ),

);
$metadata['https://shib.lynda.com/shibboleth-sp'] = array (
  'entityid' => 'https://shib.lynda.com/shibboleth-sp',

  'simplesaml.nameidattribute' => 'mail',
  'attributes' => array('mail', 'sn', 'givenName'),
  'AttributeNameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',

  'authproc' => array(
    50 => array(
      'class' => 'core:AttributeMap',
      'name2oid'
    )
  ),

  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://shib.lynda.com/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
   2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://shib.lynda.com/Shibboleth.sso/SAML2/Artifact',
      'index' => 5,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://shib.lynda.com/Shibboleth.sso/SLO/Redirect',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://shib.lynda.com/Shibboleth.sso/SLO/POST',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://shib.lynda.com/Shibboleth.sso/SLO/Artifact',
    ),
  ),
);

$metadata['urn:federation:MicrosoftOnline'] = array (
  'entityid' => 'urn:federation:MicrosoftOnline',
  'AssertionConsumerService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.microsoftonline.com/login.srf',
      'index' => 0,
      'isDefault' => true,
    ),
  ),
  'SingleLogoutService' =>
    array (
      0 =>
      array (
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        'Location' => 'https://login.microsoftonline.com/login.srf',
      ),
    ),
  'attributes' => array('mail', 'objectGUID'),
  'authproc' => array(
    10 => array(
      'class' => 'saml:AttributeNameID',
      'attribute' => 'objectGUID',
      'Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
      'SPNameQualifier' => FALSE,
    ),
    50 => array(
      'class' => 'core:AttributeMap',
      'mail' => 'IDPEmail'
    ),
  ),

);
$metadata['yammer.com'] = array (
  'entityid' => 'yammer.com',
  'AssertionConsumerService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://saml.yammer.com/sp/ACS.saml2',
      'index' => 0,
    ),
  ),
  'attributes' => array('mail'),
  'authproc' => array(
    50 => array(
      'class' => 'core:AttributeMap',
      'mail' => 'SAML_SUBJECT'
    ),
  ),
);

$metadata['https://icthelp.newington.nsw.edu.au/helpdesk/WebObjects/Helpdesk.woa'] = array (
  'entityid' => 'https://icthelp.newington.nsw.edu.au/helpdesk/WebObjects/Helpdesk.woa',
  'simplesaml.nameidattribute' => 'sAMAccountName',
  'simplesaml.attributes' => FALSE,
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:email',
  'AssertionConsumerService' => 'https://icthelp.newington.nsw.edu.au/helpdesk/WebObjects/Helpdesk.woa',
);

$metadata['https://shibboleth.clickview.com.au/shibboleth'] = array (
  'entityid' => 'https://shibboleth.clickview.com.au/shibboleth',
  'simplesaml.nameidattribute' => 'urn:oid:0.9.2342.19200300.100.1.3', // mail
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:email',
  'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
  'authproc' => array(
    40 => array(
      'class' => 'core:AttributeMap',
      'memberOf' => 'urn:oid:1.2.840.113556.1.2.102'
    ),
    50 => array(
      'class' => 'core:AttributeMap',
      'name2oid'
    )
  ),
  'AssertionConsumerService' => array (0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://shibboleth.clickview.com.au/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
  )
);

$metadata['https://newington.idm.oclc.org/shibboleth'] = array (
  'entityid' => 'https://newington.idm.oclc.org/shibboleth',
  'signresponse' => TRUE,
  'assertion.encryption' => TRUE,
  'AssertionConsumerService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.newington.idm.oclc.org/Shibboleth.sso/SAML2/POST',
    ),
    1 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://login.newington.idm.oclc.org/Shibboleth.sso/SAML2/Artifact',
    ),
  ),
 'keys' => array (
    0 => array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIFgDCCBGigAwIBAgIQBlVRHFuAF+hquyINcct61jANBgkqhkiG9w0BAQsFADBw
          MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
          d3cuZGlnaWNlcnQuY29tMS8wLQYDVQQDEyZEaWdpQ2VydCBTSEEyIEhpZ2ggQXNz
          dXJhbmNlIFNlcnZlciBDQTAeFw0xNDA4MjIwMDAwMDBaFw0xNjA4MjYxMjAwMDBa
          MIGEMQswCQYDVQQGEwJVUzENMAsGA1UECBMET2hpbzEPMA0GA1UEBxMGRHVibGlu
          MTIwMAYDVQQKEylPQ0xDIE9ubGluZSBDb21wdXRlciBMaWJyYXJ5IENlbnRlciwg
          SW5jLjEhMB8GA1UEAwwYKi5uZXdpbmd0b24uaWRtLm9jbGMub3JnMIIBIjANBgkq
          hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnQfh+rOlCnNmT3jB61C0BwNAvcE9qc+x
          kC8hs0TN+oGuSGJJxWmLQZhHPJOdIVqpp/3sO1sEUF7xEHkEaRR03tVG92bLyrtf
          EzOa9dop0XSK4PlwcE7ae/f1hpygNYDUGtExS2JnSwzeX8KWzD/JIFjIPnF/DrHK
          4E+rcQRApTtBaPO2o8s41zjwYd8nsfhNgypTgW8xZy7PA4Zr94w7YtOKIolFE3pr
          CNdK5JMps1HhNOvpikqUgVyfsL/TMkfnBpTtu3Zxj+YJVpFZq/yKqoSqGgj1GvVD
          cbosLExepTw8qAxmoPEv3vha8DLo3F2Lgh2FlCSFdxLPa+PglbgbjwIDAQABo4IB
          /zCCAfswHwYDVR0jBBgwFoAUUWj/kK8CB3U8zNllZGKiErhZcjswHQYDVR0OBBYE
          FKWi23SilZUH87OXaWhAUgNTWmGiMDsGA1UdEQQ0MDKCGCoubmV3aW5ndG9uLmlk
          bS5vY2xjLm9yZ4IWbmV3aW5ndG9uLmlkbS5vY2xjLm9yZzAOBgNVHQ8BAf8EBAMC
          BaAwHQYDVR0lBBYwFAYIKwYBBQUHAwEGCCsGAQUFBwMCMHUGA1UdHwRuMGwwNKAy
          oDCGLmh0dHA6Ly9jcmwzLmRpZ2ljZXJ0LmNvbS9zaGEyLWhhLXNlcnZlci1nMi5j
          cmwwNKAyoDCGLmh0dHA6Ly9jcmw0LmRpZ2ljZXJ0LmNvbS9zaGEyLWhhLXNlcnZl
          ci1nMi5jcmwwQgYDVR0gBDswOTA3BglghkgBhv1sAQEwKjAoBggrBgEFBQcCARYc
          aHR0cHM6Ly93d3cuZGlnaWNlcnQuY29tL0NQUzCBgwYIKwYBBQUHAQEEdzB1MCQG
          CCsGAQUFBzABhhhodHRwOi8vb2NzcC5kaWdpY2VydC5jb20wTQYIKwYBBQUHMAKG
          QWh0dHA6Ly9jYWNlcnRzLmRpZ2ljZXJ0LmNvbS9EaWdpQ2VydFNIQTJIaWdoQXNz
          dXJhbmNlU2VydmVyQ0EuY3J0MAwGA1UdEwEB/wQCMAAwDQYJKoZIhvcNAQELBQAD
          ggEBAB4yF3bc4DIBfKlDgoHKRTh02uzRdvtz6E+K6LVJ+keYeUccmTlr2CRYOu6J
          8qS9VsEkv3UqVh6QwHiyLrVvko34PYEQrZz6ddW0KwjHzAs7363c+H1Wu+Q5VsV3
          zCzgXyF79GhLty0AGsBCgbsJltr18Kan11WxgjYdf5BXnY3RFhQULE0yx3dAk2ld
          VUn4Sb2pZ6Md3m71EWWgIpOY8li6539Tgdj8N4qPfPIdPeP4Um/BxY1YVU60U4fU
          3LOOA8fqXNem3XnUAKFy5glD9oQ1C8HMcR/x1coHyfQGs2mjn3v66jS/DIf+hV9U
          6FeCNuOGvygQVDlNBeFnEYj0f/4= ',
    ),
  ),
);

$metadata['https://newington.idm.oclc.org:9443/shibboleth'] = array (
  'entityid' => 'https://newington.idm.oclc.org:9443/shibboleth',
  'signresponse' => TRUE,
  'assertion.encryption' => TRUE,
  'AssertionConsumerService' => array (
    0 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.newington.idm.oclc.org:9443/Shibboleth.sso/SAML2/POST',
    ),
    1 => array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://login.newington.idm.oclc.org:9443/Shibboleth.sso/SAML2/Artifact',
    ),
  ),
 'keys' => array (
    0 => array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIFgDCCBGigAwIBAgIQBlVRHFuAF+hquyINcct61jANBgkqhkiG9w0BAQsFADBw
          MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
          d3cuZGlnaWNlcnQuY29tMS8wLQYDVQQDEyZEaWdpQ2VydCBTSEEyIEhpZ2ggQXNz
          dXJhbmNlIFNlcnZlciBDQTAeFw0xNDA4MjIwMDAwMDBaFw0xNjA4MjYxMjAwMDBa
          MIGEMQswCQYDVQQGEwJVUzENMAsGA1UECBMET2hpbzEPMA0GA1UEBxMGRHVibGlu
          MTIwMAYDVQQKEylPQ0xDIE9ubGluZSBDb21wdXRlciBMaWJyYXJ5IENlbnRlciwg
          SW5jLjEhMB8GA1UEAwwYKi5uZXdpbmd0b24uaWRtLm9jbGMub3JnMIIBIjANBgkq
          hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnQfh+rOlCnNmT3jB61C0BwNAvcE9qc+x
          kC8hs0TN+oGuSGJJxWmLQZhHPJOdIVqpp/3sO1sEUF7xEHkEaRR03tVG92bLyrtf
          EzOa9dop0XSK4PlwcE7ae/f1hpygNYDUGtExS2JnSwzeX8KWzD/JIFjIPnF/DrHK
          4E+rcQRApTtBaPO2o8s41zjwYd8nsfhNgypTgW8xZy7PA4Zr94w7YtOKIolFE3pr
          CNdK5JMps1HhNOvpikqUgVyfsL/TMkfnBpTtu3Zxj+YJVpFZq/yKqoSqGgj1GvVD
          cbosLExepTw8qAxmoPEv3vha8DLo3F2Lgh2FlCSFdxLPa+PglbgbjwIDAQABo4IB
          /zCCAfswHwYDVR0jBBgwFoAUUWj/kK8CB3U8zNllZGKiErhZcjswHQYDVR0OBBYE
          FKWi23SilZUH87OXaWhAUgNTWmGiMDsGA1UdEQQ0MDKCGCoubmV3aW5ndG9uLmlk
          bS5vY2xjLm9yZ4IWbmV3aW5ndG9uLmlkbS5vY2xjLm9yZzAOBgNVHQ8BAf8EBAMC
          BaAwHQYDVR0lBBYwFAYIKwYBBQUHAwEGCCsGAQUFBwMCMHUGA1UdHwRuMGwwNKAy
          oDCGLmh0dHA6Ly9jcmwzLmRpZ2ljZXJ0LmNvbS9zaGEyLWhhLXNlcnZlci1nMi5j
          cmwwNKAyoDCGLmh0dHA6Ly9jcmw0LmRpZ2ljZXJ0LmNvbS9zaGEyLWhhLXNlcnZl
          ci1nMi5jcmwwQgYDVR0gBDswOTA3BglghkgBhv1sAQEwKjAoBggrBgEFBQcCARYc
          aHR0cHM6Ly93d3cuZGlnaWNlcnQuY29tL0NQUzCBgwYIKwYBBQUHAQEEdzB1MCQG
          CCsGAQUFBzABhhhodHRwOi8vb2NzcC5kaWdpY2VydC5jb20wTQYIKwYBBQUHMAKG
          QWh0dHA6Ly9jYWNlcnRzLmRpZ2ljZXJ0LmNvbS9EaWdpQ2VydFNIQTJIaWdoQXNz
          dXJhbmNlU2VydmVyQ0EuY3J0MAwGA1UdEwEB/wQCMAAwDQYJKoZIhvcNAQELBQAD
          ggEBAB4yF3bc4DIBfKlDgoHKRTh02uzRdvtz6E+K6LVJ+keYeUccmTlr2CRYOu6J
          8qS9VsEkv3UqVh6QwHiyLrVvko34PYEQrZz6ddW0KwjHzAs7363c+H1Wu+Q5VsV3
          zCzgXyF79GhLty0AGsBCgbsJltr18Kan11WxgjYdf5BXnY3RFhQULE0yx3dAk2ld
          VUn4Sb2pZ6Md3m71EWWgIpOY8li6539Tgdj8N4qPfPIdPeP4Um/BxY1YVU60U4fU
          3LOOA8fqXNem3XnUAKFy5glD9oQ1C8HMcR/x1coHyfQGs2mjn3v66jS/DIf+hV9U
          6FeCNuOGvygQVDlNBeFnEYj0f/4= ',
    ),
  ),
);

?>
