<?php

require "vendor/autoload.php";

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'pasteforlink.auth0.com',
  'client_id' => 'GAvHgI3XNhXLLm14j58ITUmlJW25RNYs',
  'client_secret' => '49WA7QBOQDOs6RqUHGTfnCMAsfbBWDe6nku9hCNaj42YxZ8rObuH8onCNoycZR3Z',
  'redirect_uri' => 'http://.52.53.223.87/',
  'audience' => 'https://pasteforlink.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);