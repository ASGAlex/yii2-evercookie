yii2-evercookie
===============

Simple evercookie component and widget for Yii2

#### Quick start

* Add to composer.json: 
```
"require": {
    "asgalex/yii2-evercookie": "dev-master"
}
```
* Add component to your project's web config:
```
$config = [
    'components' => [
        'evercookie' => [
            'class' => 'asgalex\evercookie\EverCookie',
    ]
];
```
* Add Evercookie widget to pages with evercookie functionality:
```
<?= EverCookieWidget::widget(); ?>
```
* Now, you have the "evercookie" object in your javascript code!

#### Configuration

You can configure the evercookie object using component settings. All settings are same as for javascript evercookie object. 
Example: 
```
$config = [
    'components' => [
        'evercookie' => [
            'class' => 'asgalex\evercookie\EverCookie',
            'java' => false,
            'silverlight' => false,
    ]
];
```
All settings will be converted to JSON and passed to javascript evercookie object as options.
