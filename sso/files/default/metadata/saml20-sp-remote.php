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
);

$metadata['https://newington.idm.oclc.org:9443/shibboleth'] = array (
  'entityid' => 'https://newington.idm.oclc.org:9443/shibboleth',
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
);

?>
