# Change Log

## [0.13.0](https://github.com/bunq/sdk_php/tree/0.13.0) (2018-03-20)

[Full Changelog](https://github.com/bunq/sdk_php/compare/0.12.4...0.13.0)

**Implemented enhancements:**

- Add zappr integration for better quality control  [\#91](https://github.com/bunq/sdk_php/issues/91)
- Add more information to templates [\#89](https://github.com/bunq/sdk_php/issues/89)
- Add response id to error messages from failed requests  [\#88](https://github.com/bunq/sdk_php/issues/88)

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

- Bunq update 7  [\#113](https://github.com/bunq/sdk_php/pull/113) ([OGKevin](https://github.com/OGKevin))
- Regenerate code for release [\#111](https://github.com/bunq/sdk_php/pull/111) ([OGKevin](https://github.com/OGKevin))
- Removed unneeded doc block. \(bunq/sdk\_php\#80\) [\#110](https://github.com/bunq/sdk_php/pull/110) ([OGKevin](https://github.com/OGKevin))
- Token qr request ideal returns the wrong type. \(bunq/sdk\_php\#80\) [\#107](https://github.com/bunq/sdk_php/pull/107) ([OGKevin](https://github.com/OGKevin))
- Throw exception when private key generation fails. \(bunq/sdk\_php\#102\) [\#105](https://github.com/bunq/sdk_php/pull/105) ([OGKevin](https://github.com/OGKevin))
- Added missing field id for TokenQrRequestIdeal. \(bunq/sdk\_php\#97\) [\#100](https://github.com/bunq/sdk_php/pull/100) ([OGKevin](https://github.com/OGKevin))
- Regenerated code to add missing id field. \(bunq/sdk\_php\#81\) [\#95](https://github.com/bunq/sdk_php/pull/95) ([OGKevin](https://github.com/OGKevin))
- Add response id to request error. \(bunq/sdk\_php\#88\) [\#93](https://github.com/bunq/sdk_php/pull/93) ([OGKevin](https://github.com/OGKevin))
- Configure Zappr [\#92](https://github.com/bunq/sdk_php/pull/92) ([OGKevin](https://github.com/OGKevin))
- Add more info to templates. \(bunq/sdk\_php\#89\) [\#90](https://github.com/bunq/sdk_php/pull/90) ([OGKevin](https://github.com/OGKevin))

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



\* *This Change Log was automatically generated by [github_changelog_generator](https://github.com/skywinder/Github-Changelog-Generator)*