<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'anandsiddharth/laravel-paytm-wallet' => 'v2.0.0@5342add0719e9c5ca94fdd13f766e6a810f2ef45',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.208.5@58fa9d8b522b0afa260299179ff950c783ff0ee1',
  'bacon/bacon-qr-code' => '2.0.4@f73543ac4e1def05f1a70bcd1525c8a157a1ad09',
  'barryvdh/laravel-ide-helper' => 'v2.10.0@73b1012b927633a1b4cd623c2e6b1678e6faef08',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'cinetpay/cinetpay-php' => '1.9.2@8a4a53bce076036fc5d6781bee839719780f2028',
  'composer/ca-bundle' => '1.3.1@4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b',
  'composer/composer' => '2.1.14@cd28fc05b0c9d3beaf58b57018725c4dc15a6446',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'composer/pcre' => '1.0.0@3d322d715c43a1ac36c7fe215fa59336265500f2',
  'composer/semver' => '3.2.6@83e511e247de329283478496f7a1e114c9517506',
  'composer/spdx-licenses' => '1.5.6@a30d487169d799745ca7280bc90fdfa693536901',
  'composer/xdebug-handler' => '2.0.3@6555461e76962fd0379c444c46fd558a0fcfb65e',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'guzzlehttp/guzzle' => '7.4.1@ee0a041b1760e6a53d2a39c8c34115adc2af2c79',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'instamojo/instamojo-php' => '0.4@99dc50bf008be77be84f447607e416f73f319904',
  'intervention/image' => '2.7.0@9a8cc99d30415ec0b3f7649e1647d03a55698545',
  'iyzico/iyzipay-php' => 'v2.0.51@fa2a07634cfc099ca47d5397ef6591d06b31cbb4',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'kingflamez/laravelrave' => 'v4.2.0@02ccc18e5f03fb25a12f898ddd180d88d0ed13d9',
  'laracasts/flash' => '3.2@76c2e200498795bdbeda97b682536130316e8b97',
  'laracon21/colorcodeconverter' => '1.2@fafb130dc5a6bfed4551f086169681bc95e81529',
  'laracon21/combinations' => '1.2@cb4c59e090ff15759c306192d1061556b34776cf',
  'laracon21/timezones' => '1.2@2cae5ec0080472819f4ba3170329c1d2b99e4f50',
  'laravel/framework' => 'v8.76.2@c67acfdc968f487b6235435080eef62a7e2ed055',
  'laravel/sanctum' => 'v2.13.0@b4c07d0014b78430a3c827064217f811f0708eaa',
  'laravel/serializable-closure' => 'v1.0.5@25de3be1bca1b17d52ff0dc02b646c667ac7266c',
  'laravel/socialite' => 'v5.2.6@b5c67f187ddcf15529ff7217fa735b132620dfac',
  'laravel/tinker' => 'v2.6.3@a9ddee4761ec8453c584e393b393caff189a3e42',
  'laravel/ui' => 'v3.4.0@b3e804559bf3973ecca160a4ae1068e6c7c167c6',
  'lcobucci/jwt' => '3.4.6@3ef8657a78278dfeae7707d51747251db4176240',
  'league/commonmark' => '2.1.0@819276bc54e83c160617d3ac0a436c239e479928',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/mime-type-detection' => '1.9.0@aa70e813a6ad3d1558fc927863d47309b4c23e69',
  'league/oauth1-client' => 'v1.10.0@88dd16b0cff68eb9167bfc849707d2c40ad91ddc',
  'maatwebsite/excel' => '3.1.34@d7446f0e808d83be128835c4b403c9e4a65b20f3',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'mehedi-iitdu/core-component-repository' => 'v1.8@7a9cde6277e0939a2802ab1c8b77766dff95854c',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'mpdf/mpdf' => 'v8.0.15@d8a5294a6cc2e814c4157aecc8d7ac25014b18ed',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.55.2@8c2a18ce3e67c34efc1b29f64fe61304368259a2',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.6@2f261e55bd6a12057442045bf2c249806abc1d02',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'niklasravnsborg/laravel-pdf' => 'v4.1.0@a5f5c22dd5e10d8f536102cec01c21282e18ebae',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'osenco/mpesa' => 'v1.20.6@2672bbdd994fbb644f9734e71833bf0118c12759',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/paypal-checkout-sdk' => 'dev-master@ee8429954c77f4854bb0748d526c184e672ec20b',
  'paypal/paypalhttp' => '1.0.1@7b09c89c80828e842c79230e7f156b61fbb68d25',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'phpoffice/phpspreadsheet' => '1.20.0@44436f270bb134b4a94670f3d020a85dfa0a3c02',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'predis/predis' => 'v1.1.9@c50c3393bb9f47fa012d0cdfb727a266b0818259',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.12@a0d9981aa07ecfcbea28e4bfa868031cca121e7d',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'razorpay/razorpay' => '2.0.0@e3cfbcf484ceba1e0f896114fa5b84e8145a311c',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rmccue/requests' => 'v1.6.1@6aac485666c2955077d77b796bbdd25f0013a4ea',
  'sebacarrasco93/laravel-payku' => '1.0.2@50e796ecb41d635d81e88ba52844333776662407',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.2.0@9f3452c93ff423469c0d56450431562ca423dcee',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'simplesoftwareio/simple-qrcode' => '4.2.0@916db7948ca6772d54bb617259c768c9cdc8d537',
  'spatie/db-dumper' => '2.21.1@05e5955fb882008a8947c5a45146d86cfafa10d1',
  'stripe/stripe-php' => 'v7.107.0@a90f74037261ed376c0d37066f396c48809c8e99',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.1@9130e1a0fc93cb0faadca4ee917171bd2ca9e5f4',
  'symfony/css-selector' => 'v5.4.0@44b933f98bb4b5220d10bed9ce5662f8c2d13dcc',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => 'v5.4.1@1e3cb3565af49cd5f93e5787500134500a29f0d9',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/filesystem' => 'v5.4.0@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/finder' => 'v5.4.0@d2f29dac98e96a98be467627bd49c2efb1bc2590',
  'symfony/http-foundation' => 'v5.4.1@5dad3780023a707f4c24beac7d57aead85c1ce3c',
  'symfony/http-kernel' => 'v5.4.1@2bdace75c9d6a6eec7e318801b7dc87a72375052',
  'symfony/mime' => 'v5.4.0@d4365000217b67c01acff407573906ff91bcfb34',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.4.0@5be20b3830f726e019162b26223110c8f47cf274',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => 'v5.4.0@9ffaaba53c61ba75a3c7a3a779051d1e9ec4fd2d',
  'symfony/translation' => 'v5.4.1@8c82cd35ed861236138d5ae1c78c0c7ebcd62107',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/var-dumper' => 'v5.4.1@2366ac8d8abe0c077844613c1a4f0c0a9f522dcc',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'twilio/sdk' => '6.31.2@be59275f0fc311cb45d5303d47bffaa06a19d6e5',
  'unicodeveloper/laravel-paystack' => '1.0.7@bfcb92255c29d92b0c4e80355a65de14e2e156f3',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'barryvdh/laravel-debugbar' => 'v3.6.5@ccf109f8755dcc7e58779d1aeb1051b04e0b4bef',
  'beyondcode/laravel-dump-server' => '1.7.0@e27c7b942ab62f6ac7168359393d328ec5215b89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.17.2@af3cd70d58ca3ef5189ff0e59efbe5a5c043e2d2',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.14.4@f056f1fe935d9ed86e698905a957334029899895',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.17.3@e8ac3499af0ea5b440908e06cc0abe5898008b3c',
  'mockery/mockery' => '1.4.4@e01123a0e847d52d186c5eb4b9bf58b0c6d00346',
  'nunomaduro/collision' => 'v5.10.0@3004cfa49c022183395eabc6d0e5207dfe498d00',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.10@c814a05837f2edb0d1471d6e3f4ab3501ca3899a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/debug' => 'v4.4.31@43ede438d4cb52cd589ae5dc070e9323866ba8e0',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-master@7f6264a647627e6f47a597a70c08bf4938630aae',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
