# Changelog

## [Unreleased](https://github.com/bunq/sdk_php/tree/HEAD)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.14.1...HEAD)

**Fixed bugs:**

- Remove getUserObject call immediately after UserContext creation \(reduce rate-limit hits\) [\#199](https://github.com/bunq/sdk_php/issues/199)
- feature/sdk\_php\#199 Do not call getUser\(\) during UserContext creation [\#200](https://github.com/bunq/sdk_php/pull/200) ([angelomelonas](https://github.com/angelomelonas))

**Closed issues:**

- Replace /sandbox-user with /sandbox-user-person and /sandbox-user-company [\#202](https://github.com/bunq/sdk_php/issues/202)

**Merged pull requests:**

- feature/sdk\_php\#202 Deprecated /sandbox-user [\#203](https://github.com/bunq/sdk_php/pull/203) ([angelomelonas](https://github.com/angelomelonas))
- feature/sdk\_php\#199 Saving/Restoring ApiContext should also store/read the context user [\#201](https://github.com/bunq/sdk_php/pull/201) ([angelomelonas](https://github.com/angelomelonas))

## [1.14.1](https://github.com/bunq/sdk_php/tree/1.14.1) (2020-08-19)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.14.0...1.14.1)

**Fixed bugs:**

- AttachmentMonetaryAccount needs a monetaryAccountId parameter [\#185](https://github.com/bunq/sdk_php/issues/185)
- Incorrect name space for BunqException [\#166](https://github.com/bunq/sdk_php/issues/166)

## [1.14.0](https://github.com/bunq/sdk_php/tree/1.14.0) (2020-07-27)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.13.1...1.14.0)

**Closed issues:**

- Balance is null [\#194](https://github.com/bunq/sdk_php/issues/194)
- Switch to new Request Signing [\#190](https://github.com/bunq/sdk_php/issues/190)

## [1.13.1](https://github.com/bunq/sdk_php/tree/1.13.1) (2020-04-03)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.13.0...1.13.1)

**Closed issues:**

- Decoding error when trying to create a CVC2 code [\#167](https://github.com/bunq/sdk_php/issues/167)

**Merged pull requests:**

- Use correct oauth token url for sandbox [\#193](https://github.com/bunq/sdk_php/pull/193) ([thijsdejong](https://github.com/thijsdejong))

## [1.13.0](https://github.com/bunq/sdk_php/tree/1.13.0) (2020-02-19)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.12.1...1.13.0)

## [1.12.1](https://github.com/bunq/sdk_php/tree/1.12.1) (2019-09-16)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.12.0...1.12.1)

**Closed issues:**

- 123456 [\#180](https://github.com/bunq/sdk_php/issues/180)

**Merged pull requests:**

- Fix decoding of double-wrapped objects. Updated OAuth endpoints. [\#181](https://github.com/bunq/sdk_php/pull/181) ([NickvandeGroes](https://github.com/NickvandeGroes))

## [1.12.0](https://github.com/bunq/sdk_php/tree/1.12.0) (2019-09-10)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.10.16...1.12.0)

**Closed issues:**

- Fout! Use of undefined constant CURLOPT\_PINNEDPUBLICKEY - assumed 'CURLOPT\_PINNEDPUBLICKEY' \(this will throw an Error in a future version of PHP\) [\#178](https://github.com/bunq/sdk_php/issues/178)
- NotificationFilterUrlMonetaryAccount::create fails [\#177](https://github.com/bunq/sdk_php/issues/177)
- TransferwiseTransfer property on EventObject is not populated [\#176](https://github.com/bunq/sdk_php/issues/176)
- Bad schedule payment update response\(sdk\_php\) [\#173](https://github.com/bunq/sdk_php/issues/173)
- Allow access to `merchant\_category\_code` in the `counterparty\_alias` [\#171](https://github.com/bunq/sdk_php/issues/171)
- Not receive schedule payment status \(sdk\_php\) [\#170](https://github.com/bunq/sdk_php/issues/170)

**Merged pull requests:**

- Fix NotificationFilter, Model issues and implement PSD2 [\#179](https://github.com/bunq/sdk_php/pull/179) ([NickvandeGroes](https://github.com/NickvandeGroes))

## [1.10.16](https://github.com/bunq/sdk_php/tree/1.10.16) (2019-06-15)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.10.2...1.10.16)

## [1.10.2](https://github.com/bunq/sdk_php/tree/1.10.2) (2019-05-15)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.10.1...1.10.2)

## [1.10.1](https://github.com/bunq/sdk_php/tree/1.10.1) (2019-05-15)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.10.0...1.10.1)

## [1.10.0](https://github.com/bunq/sdk_php/tree/1.10.0) (2019-03-22)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.2.2...1.10.0)

**Fixed bugs:**

- Missing MonetaryAccountSavings [\#165](https://github.com/bunq/sdk_php/issues/165)

**Closed issues:**

- Can't use public functions in endpoints [\#172](https://github.com/bunq/sdk_php/issues/172)
- tinker/user-overview returns 500 \(Fatal error: Uncaught bunq\Exception\PleaseContactBunqException\) [\#169](https://github.com/bunq/sdk_php/issues/169)
- QUESITION: Does BUNQ-INSTALL make API Key Wildcard if no IP is given for permitted IP? [\#168](https://github.com/bunq/sdk_php/issues/168)

## [1.2.2](https://github.com/bunq/sdk_php/tree/1.2.2) (2018-11-21)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.2.1...1.2.2)

## [1.2.1](https://github.com/bunq/sdk_php/tree/1.2.1) (2018-11-21)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.2.0...1.2.1)

## [1.2.0](https://github.com/bunq/sdk_php/tree/1.2.0) (2018-11-06)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.1.0...1.2.0)

**Closed issues:**

- Failed to create API Context [\#163](https://github.com/bunq/sdk_php/issues/163)
- In addCallbackUrl voor Tinker geeft error Bunq PHP [\#161](https://github.com/bunq/sdk_php/issues/161)

## [1.1.0](https://github.com/bunq/sdk_php/tree/1.1.0) (2018-10-05)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.0.1...1.1.0)

**Closed issues:**

- User credentials are incorrect. Incorrect API key or IP address. [\#160](https://github.com/bunq/sdk_php/issues/160)
- error:02001003:system library:fopen:No such process [\#159](https://github.com/bunq/sdk_php/issues/159)
- \[epic\] Revamp readme  [\#139](https://github.com/bunq/sdk_php/issues/139)

## [1.0.1](https://github.com/bunq/sdk_php/tree/1.0.1) (2018-09-01)

[Full Changelog](https://github.com/bunq/sdk_php/compare/1.0.0...1.0.1)

**Closed issues:**

- FatalThrowableError when using linkCardToBankAccount [\#158](https://github.com/bunq/sdk_php/issues/158)

## [1.0.0](https://github.com/bunq/sdk_php/tree/1.0.0) (2018-07-24)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.13.2...1.0.0)

**Implemented enhancements:**

- \[php\] Update examples in readme [\#140](https://github.com/bunq/sdk_php/issues/140)
- Separation of concerns: InstallationUtil class is displaying error messages [\#133](https://github.com/bunq/sdk_php/issues/133)
- It is not possible to refresh userContext data [\#122](https://github.com/bunq/sdk_php/issues/122)
- Fix/Optimise test framework for CI.  [\#120](https://github.com/bunq/sdk_php/issues/120)
- Add more example scripts [\#98](https://github.com/bunq/sdk_php/issues/98)
- PHP unit needs to be updated to version 6 [\#96](https://github.com/bunq/sdk_php/issues/96)
- Auto save the session after automatic session reset has been executed  [\#94](https://github.com/bunq/sdk_php/issues/94)
- Monetary account joint cannot be retrieved. [\#76](https://github.com/bunq/sdk_php/issues/76)
- Assert that variables are correct when creating an ApiContext with code. [\#35](https://github.com/bunq/sdk_php/issues/35)
- Fix supperflous fields error bunq/sdk\_php\#118 [\#125](https://github.com/bunq/sdk_php/pull/125) ([OGKevin](https://github.com/OGKevin))
- Refresh user context bunq/sdk\_php\#122 [\#124](https://github.com/bunq/sdk_php/pull/124) ([OGKevin](https://github.com/OGKevin))
- Optimise test framework auto topup \#120 [\#123](https://github.com/bunq/sdk_php/pull/123) ([OGKevin](https://github.com/OGKevin))
- Optimise test framework bunq/sdk\_php\#120 [\#121](https://github.com/bunq/sdk_php/pull/121) ([OGKevin](https://github.com/OGKevin))

**Fixed bugs:**

- Fix the CustomerStatementExport Listing [\#146](https://github.com/bunq/sdk_php/issues/146)
- Parameter default should be null and not a string.  [\#137](https://github.com/bunq/sdk_php/issues/137)
- Composer installation will generate warnings on case-insensitive systems [\#130](https://github.com/bunq/sdk_php/issues/130)
- Can not construct a BunqMeTabEntry for use with BunqMeTab::create\(\) [\#118](https://github.com/bunq/sdk_php/issues/118)

**Closed issues:**

- BunqContext class file duplicated [\#155](https://github.com/bunq/sdk_php/issues/155)
- Update Sandbox API key procedure [\#153](https://github.com/bunq/sdk_php/issues/153)
- Unexpected API rate limit error [\#152](https://github.com/bunq/sdk_php/issues/152)
- add Oauth support [\#156](https://github.com/bunq/sdk_php/issues/156)
- README contains 'of' instead of 'or' [\#119](https://github.com/bunq/sdk_php/issues/119)

**Merged pull requests:**

- Updating Sandbox API key procedure. \(bunq/sdk\_php\#153\) [\#154](https://github.com/bunq/sdk_php/pull/154) ([sandervdo](https://github.com/sandervdo))
- Removed userContext.php \(bunq/sdk\_php\#114\) [\#116](https://github.com/bunq/sdk_php/pull/116) ([OGKevin](https://github.com/OGKevin))
- Oauth bunq/sdk\_php\#156 [\#157](https://github.com/bunq/sdk_php/pull/157) ([OGKevin](https://github.com/OGKevin))
- Proper check for curl error zero. \(bunq/sdk\_php\#7\) [\#148](https://github.com/bunq/sdk_php/pull/148) ([OGKevin](https://github.com/OGKevin))
- Fix joint co owner error bunq/sdk\_php\#76 [\#144](https://github.com/bunq/sdk_php/pull/144) ([OGKevin](https://github.com/OGKevin))
- Regenerated code to add request fields to objects. \(bunq/sdk\_php\#118\) [\#143](https://github.com/bunq/sdk_php/pull/143) ([OGKevin](https://github.com/OGKevin))
- Update readme to point to tinker. \(bunq/sdk\_php\#140\) [\#142](https://github.com/bunq/sdk_php/pull/142) ([OGKevin](https://github.com/OGKevin))
- Regenerated code. \(bunq/sdk\_php\#118\) [\#141](https://github.com/bunq/sdk_php/pull/141) ([OGKevin](https://github.com/OGKevin))
- Use null as default parameter value. \(bunq/sdk\_php\#137\) [\#138](https://github.com/bunq/sdk_php/pull/138) ([OGKevin](https://github.com/OGKevin))
- Bunq-install should display error message and not installation util. \(bunq/sdk\_php\#133\) [\#136](https://github.com/bunq/sdk_php/pull/136) ([Jorijn](https://github.com/Jorijn))
- Assert values are correct for api context bunq/sdk\_php\#35 [\#135](https://github.com/bunq/sdk_php/pull/135) ([OGKevin](https://github.com/OGKevin))
- Replace examples with tinker bunq/sdk\_php\#98 [\#132](https://github.com/bunq/sdk_php/pull/132) ([OGKevin](https://github.com/OGKevin))
- Auto update bunq context bunq/sdk\_php\#94 [\#131](https://github.com/bunq/sdk_php/pull/131) ([OGKevin](https://github.com/OGKevin))
- Fix typo in README [\#117](https://github.com/bunq/sdk_php/pull/117) ([casperboone](https://github.com/casperboone))

## [0.13.2](https://github.com/bunq/sdk_php/tree/0.13.2) (2018-05-30)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.13.1...0.13.2)

**Implemented enhancements:**

- \[DX\] User::listing requires ugly logic to make it user-type agnostic [\#42](https://github.com/bunq/sdk_php/issues/42)
- \[DX\] Static resource access is bad for mockability [\#41](https://github.com/bunq/sdk_php/issues/41)
- Initial feedback on project \(organization\) [\#4](https://github.com/bunq/sdk_php/issues/4)

**Fixed bugs:**

- cURL error 60: SSL certificate problem: unable to get local issuer certificate [\#104](https://github.com/bunq/sdk_php/issues/104)

**Closed issues:**

- Add support for the undocumented user/%s/monetary-account/%s/customer-statement/%s/content call [\#147](https://github.com/bunq/sdk_php/issues/147)
- MonetaryAccount listing succeeds on sandbox but fails on production [\#145](https://github.com/bunq/sdk_php/issues/145)
-  Error message: The request signature is invalid. [\#129](https://github.com/bunq/sdk_php/issues/129)
- Error: apiContext has not been loaded. [\#128](https://github.com/bunq/sdk_php/issues/128)
- TabUsageSingle with uuid "X" not found. [\#106](https://github.com/bunq/sdk_php/issues/106)
- Move to new sandbox  [\#149](https://github.com/bunq/sdk_php/issues/149)

**Merged pull requests:**

- Move to new sandbox bunq/sdk\_php\#149 [\#150](https://github.com/bunq/sdk_php/pull/150) ([OGKevin](https://github.com/OGKevin))

## [0.13.1](https://github.com/bunq/sdk_php/tree/0.13.1) (2018-03-21)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.13.0...0.13.1)

**Closed issues:**

- bunqContext should be renamed to BunqContext. [\#114](https://github.com/bunq/sdk_php/issues/114)

**Merged pull requests:**

- Renamed filename accordingly. [\#115](https://github.com/bunq/sdk_php/pull/115) ([OGKevin](https://github.com/OGKevin))

## [0.13.0](https://github.com/bunq/sdk_php/tree/0.13.0) (2018-03-20)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.4...0.13.0)

**Implemented enhancements:**

- Add zappr integration for better quality control  [\#91](https://github.com/bunq/sdk_php/issues/91)
- Add more information to templates [\#89](https://github.com/bunq/sdk_php/issues/89)
- Add response id to error messages from failed requests  [\#88](https://github.com/bunq/sdk_php/issues/88)
- Add optional parameters to constructor  [\#82](https://github.com/bunq/sdk_php/issues/82)

**Fixed bugs:**

- openssl\_pkey\_get\_details\(\) expects parameter 1 to be resource, boolean given [\#102](https://github.com/bunq/sdk_php/issues/102)
- Token request ideal is missing id attribute in response. [\#97](https://github.com/bunq/sdk_php/issues/97)
- "HTTP Response Code: 400 The request signature is invalid." [\#87](https://github.com/bunq/sdk_php/issues/87)
- Field ID is missing from MasterCardAction [\#81](https://github.com/bunq/sdk_php/issues/81)
- TokenQrRequestIdeal returns the wrong type [\#80](https://github.com/bunq/sdk_php/issues/80)

**Closed issues:**

- bunq update 7  [\#112](https://github.com/bunq/sdk_php/issues/112)
- Document conditions for Payment.description [\#108](https://github.com/bunq/sdk_php/issues/108)
- Simple way to create a iDeal request? [\#103](https://github.com/bunq/sdk_php/issues/103)
- DraftPayment create fails with superfluous field-errors [\#101](https://github.com/bunq/sdk_php/issues/101)

**Merged pull requests:**

- Regenerate code for release [\#111](https://github.com/bunq/sdk_php/pull/111) ([OGKevin](https://github.com/OGKevin))
- Removed unneeded doc block. \(bunq/sdk\_php\#80\) [\#110](https://github.com/bunq/sdk_php/pull/110) ([OGKevin](https://github.com/OGKevin))
- Token qr request ideal returns the wrong type. \(bunq/sdk\_php\#80\) [\#107](https://github.com/bunq/sdk_php/pull/107) ([OGKevin](https://github.com/OGKevin))
- Throw exception when private key generation fails. \(bunq/sdk\_php\#102\) [\#105](https://github.com/bunq/sdk_php/pull/105) ([OGKevin](https://github.com/OGKevin))
- Added missing field id for TokenQrRequestIdeal. \(bunq/sdk\_php\#97\) [\#100](https://github.com/bunq/sdk_php/pull/100) ([OGKevin](https://github.com/OGKevin))
- Regenerated code to add missing id field. \(bunq/sdk\_php\#81\) [\#95](https://github.com/bunq/sdk_php/pull/95) ([OGKevin](https://github.com/OGKevin))
- Add response id to request error. \(bunq/sdk\_php\#88\) [\#93](https://github.com/bunq/sdk_php/pull/93) ([OGKevin](https://github.com/OGKevin))
- Configure Zappr [\#92](https://github.com/bunq/sdk_php/pull/92) ([OGKevin](https://github.com/OGKevin))
- Add more info to templates. \(bunq/sdk\_php\#89\) [\#90](https://github.com/bunq/sdk_php/pull/90) ([OGKevin](https://github.com/OGKevin))
- Bunq update 7  [\#113](https://github.com/bunq/sdk_php/pull/113) ([OGKevin](https://github.com/OGKevin))

## [0.12.4](https://github.com/bunq/sdk_php/tree/0.12.4) (2017-12-21)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.3...0.12.4)

**Implemented enhancements:**

- Introduce fromJson method.  [\#84](https://github.com/bunq/sdk_php/issues/84)
- Make sure received signatures headers are correctly cased [\#75](https://github.com/bunq/sdk_php/issues/75)
- Return base class from createFromJsonString [\#73](https://github.com/bunq/sdk_php/issues/73)
- CHANGELOG.md is empty  [\#71](https://github.com/bunq/sdk_php/issues/71)
- Improve decoder to recognise child objects  [\#68](https://github.com/bunq/sdk_php/issues/68)
- Return static. \(bunq/sdk\_php\#73\) [\#74](https://github.com/bunq/sdk_php/pull/74) ([OGKevin](https://github.com/OGKevin))
- Generated CHANGELOG.md :clap:. \(bunq/sdk\_php\#71\) [\#72](https://github.com/bunq/sdk_php/pull/72) ([OGKevin](https://github.com/OGKevin))

**Fixed bugs:**

- Fatal error in the interactive installer when no allowed IP is given [\#79](https://github.com/bunq/sdk_php/issues/79)
- Fatal when using MonetaryAccountBank class  [\#38](https://github.com/bunq/sdk_php/issues/38)
- Add specific php version to composer. \(bunq/sdk\_php\#38\) [\#77](https://github.com/bunq/sdk_php/pull/77) ([OGKevin](https://github.com/OGKevin))

**Merged pull requests:**

- Feature/make sure headers are correctly cased bunq/sdk php\#75 [\#85](https://github.com/bunq/sdk_php/pull/85) ([OGKevin](https://github.com/OGKevin))
- Feature/decode child object in parent object bunq/sdk php\#68 [\#83](https://github.com/bunq/sdk_php/pull/83) ([OGKevin](https://github.com/OGKevin))
- Allow permitted IPs to be null in the interactive installer [\#78](https://github.com/bunq/sdk_php/pull/78) ([mbernson](https://github.com/mbernson))

## [0.12.3](https://github.com/bunq/sdk_php/tree/0.12.3) (2017-11-15)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.2...0.12.3)

**Implemented enhancements:**

- Callback models for holding callback data. [\#67](https://github.com/bunq/sdk_php/issues/67)

**Fixed bugs:**

- Scheduled payments are not decoded because of a typo [\#70](https://github.com/bunq/sdk_php/issues/70)

**Merged pull requests:**

- Feature/callback models \#67 [\#69](https://github.com/bunq/sdk_php/pull/69) ([OGKevin](https://github.com/OGKevin))

## [0.12.2](https://github.com/bunq/sdk_php/tree/0.12.2) (2017-11-08)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.1...0.12.2)

**Implemented enhancements:**

- Add missing fields for cvc endpoint  [\#64](https://github.com/bunq/sdk_php/issues/64)
- Missing CARD GENERATED CVC2 endpoint [\#61](https://github.com/bunq/sdk_php/issues/61)
- More flexibility for sessionContext handling [\#58](https://github.com/bunq/sdk_php/issues/58)
- Added cvc\_endpoint. \#61 [\#62](https://github.com/bunq/sdk_php/pull/62) ([OGKevin](https://github.com/OGKevin))
- Feature/is expired\#58 [\#59](https://github.com/bunq/sdk_php/pull/59) ([OGKevin](https://github.com/OGKevin))

**Fixed bugs:**

- Getting a DraftPayment that has been ACCEPTED results in an error [\#63](https://github.com/bunq/sdk_php/issues/63)

**Merged pull requests:**

- Feature/fix draft payment object \#63 [\#66](https://github.com/bunq/sdk_php/pull/66) ([OGKevin](https://github.com/OGKevin))
- Feature/add missing cvc fields \#64 [\#65](https://github.com/bunq/sdk_php/pull/65) ([OGKevin](https://github.com/OGKevin))

## [0.12.1](https://github.com/bunq/sdk_php/tree/0.12.1) (2017-10-11)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.0...0.12.1)

**Fixed bugs:**

- toJson\(\) fails on ApiContext of an user person due to session context [\#56](https://github.com/bunq/sdk_php/issues/56)

**Merged pull requests:**

- toJson\(\) fails on ApiContext of an user person due to session context [\#57](https://github.com/bunq/sdk_php/pull/57) ([DennisSnijder](https://github.com/DennisSnijder))

## [0.12.0](https://github.com/bunq/sdk_php/tree/0.12.0) (2017-10-11)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.11.0...0.12.0)

**Implemented enhancements:**

- Add strictly typed BunqResponses [\#52](https://github.com/bunq/sdk_php/issues/52)
- Better error handling  [\#49](https://github.com/bunq/sdk_php/issues/49)
- End support for PHP 5.6 [\#44](https://github.com/bunq/sdk_php/issues/44)
- Add strictly typed responses; fix GET in extended models \[\#52\] [\#53](https://github.com/bunq/sdk_php/pull/53) ([dnl-blkv](https://github.com/dnl-blkv))
- Feature/exception factory [\#50](https://github.com/bunq/sdk_php/pull/50) ([OGKevin](https://github.com/OGKevin))
- Marked all files in generated dir as generated code. [\#47](https://github.com/bunq/sdk_php/pull/47) ([OGKevin](https://github.com/OGKevin))

**Fixed bugs:**

- User::get returns empty object? [\#51](https://github.com/bunq/sdk_php/issues/51)
- Error retrieving pinned certificates [\#14](https://github.com/bunq/sdk_php/issues/14)

**Merged pull requests:**

- cleanup after 52-strict-response [\#55](https://github.com/bunq/sdk_php/pull/55) ([dnl-blkv](https://github.com/dnl-blkv))
- !== instead of !=  [\#54](https://github.com/bunq/sdk_php/pull/54) ([OGKevin](https://github.com/OGKevin))
- Added PHPStan and script to run "composer phpstan" [\#48](https://github.com/bunq/sdk_php/pull/48) ([holtkamp](https://github.com/holtkamp))

## [0.11.0](https://github.com/bunq/sdk_php/tree/0.11.0) (2017-09-06)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.10.0...0.11.0)

**Implemented enhancements:**

- Ignore generated code for reviews [\#45](https://github.com/bunq/sdk_php/issues/45)
- Pagination and limit is missing for listing methods [\#15](https://github.com/bunq/sdk_php/issues/15)
- Updated git attributes. [\#46](https://github.com/bunq/sdk_php/pull/46) ([OGKevin](https://github.com/OGKevin))
- Add Pagination and missing fields/endpoints \[\#15\] [\#43](https://github.com/bunq/sdk_php/pull/43) ([dnl-blkv](https://github.com/dnl-blkv))

## [0.10.0](https://github.com/bunq/sdk_php/tree/0.10.0) (2017-08-22)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.9.1...0.10.0)

**Implemented enhancements:**

- Allow saving context to JSON and restoring from it [\#39](https://github.com/bunq/sdk_php/issues/39)
- Response is missing response headers and pagination [\#33](https://github.com/bunq/sdk_php/issues/33)
- Allow to configure Guzzle options / use a proxy to ensure static IP address [\#5](https://github.com/bunq/sdk_php/issues/5)
- Cleanup; add toJson and fromJson to ApiContext \[\#39\] [\#40](https://github.com/bunq/sdk_php/pull/40) ([dnl-blkv](https://github.com/dnl-blkv))
- \#33 bunq response [\#34](https://github.com/bunq/sdk_php/pull/34) ([dnl-blkv](https://github.com/dnl-blkv))
- \#5 Allow setting a proxy [\#27](https://github.com/bunq/sdk_php/pull/27) ([qurben](https://github.com/qurben))
- Introduction of Grumphp [\#24](https://github.com/bunq/sdk_php/pull/24) ([cafferata](https://github.com/cafferata))

**Fixed bugs:**

- Error in api context script [\#36](https://github.com/bunq/sdk_php/issues/36)

**Merged pull requests:**

- Fixes \#36 on php5.6 [\#37](https://github.com/bunq/sdk_php/pull/37) ([OGKevin](https://github.com/OGKevin))
- Added an .gitattributes file. [\#20](https://github.com/bunq/sdk_php/pull/20) ([cafferata](https://github.com/cafferata))

## [0.9.1](https://github.com/bunq/sdk_php/tree/0.9.1) (2017-08-07)

[Full Changelog](https://github.com/bunq/sdk_php/compare/e8ae793435861444486ac48e0fbb385f06afcd1d...0.9.1)

**Implemented enhancements:**

- Remove phpstan [\#28](https://github.com/bunq/sdk_php/issues/28)
- Suggestion: use Objects instead of arrays [\#22](https://github.com/bunq/sdk_php/issues/22)
- Changes the composer PHP requirement [\#19](https://github.com/bunq/sdk_php/pull/19) ([cafferata](https://github.com/cafferata))
- Removed the default PHPStorm constructor header\(s\) [\#18](https://github.com/bunq/sdk_php/pull/18) ([cafferata](https://github.com/cafferata))
- Add readme for tests. [\#16](https://github.com/bunq/sdk_php/pull/16) ([OGKevin](https://github.com/OGKevin))
- Restructure project [\#12](https://github.com/bunq/sdk_php/pull/12) ([LauLaman](https://github.com/LauLaman))
- Add PHP-CS and PHPStan dependencies and scripts to execute [\#3](https://github.com/bunq/sdk_php/pull/3) ([holtkamp](https://github.com/holtkamp))
- Add first series of unit-tests [\#1](https://github.com/bunq/sdk_php/pull/1) ([OGKevin](https://github.com/OGKevin))

**Fixed bugs:**

- User Agent header generation is broken in ApiClient [\#30](https://github.com/bunq/sdk_php/issues/30)
- Scripts in composer.json are broken [\#25](https://github.com/bunq/sdk_php/issues/25)
- public.api.bunq.com is using wrong certificate [\#11](https://github.com/bunq/sdk_php/issues/11)
- SessionContext is missing timeout for UserPerson [\#10](https://github.com/bunq/sdk_php/issues/10)
- SDK not working on Windows \(XAMPP\) [\#8](https://github.com/bunq/sdk_php/issues/8)
- Curl error "Invalid certificate chain" when running `vendor/bin/bunq-install` [\#6](https://github.com/bunq/sdk_php/issues/6)

**Closed issues:**

- Incorrect composer.json / authors sections [\#2](https://github.com/bunq/sdk_php/issues/2)

**Merged pull requests:**

- Fix user agent generation in ApiClient [\#31](https://github.com/bunq/sdk_php/pull/31) ([dnl-blkv](https://github.com/dnl-blkv))
- \#28 remove phpstan as it does not support php 5.6 [\#29](https://github.com/bunq/sdk_php/pull/29) ([qurben](https://github.com/qurben))
- \#25 Update directory for composer scripts, also omit version. [\#26](https://github.com/bunq/sdk_php/pull/26) ([qurben](https://github.com/qurben))
- Updated composer.lock [\#23](https://github.com/bunq/sdk_php/pull/23) ([cafferata](https://github.com/cafferata))
- Fixed signature newline handling \(Windows\) [\#9](https://github.com/bunq/sdk_php/pull/9) ([BabyDino](https://github.com/BabyDino))



\* *This Changelog was automatically generated by [github_changelog_generator](https://github.com/github-changelog-generator/github-changelog-generator)*
