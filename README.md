# RbxAssetHash (v1)

## Including RbxAssetHash in your asset script.

```php
<?php
    // RbxAssetHash @ Credits: https://github.com/OkFone5s/RbxAssetHash
    use RbxAssetHash\Hash;
    include "class/RbxAssetHash/Hash.php";
?>
```

## Using Generation

```php
<?php
$ID = (int)$_GET["id"];
$hash = Hash::Generate($ID);
?>
```

## Using Store

```php
<?php
$ID = (int)$_GET["id"];
$hash = Hash::Generate($ID);
$success = Hash::Store($ID, $hash);

if ($success) {
    // save asset
}
?>
```

## Using Get

```php
<?php
$ID = (int)$_GET["id"];
$MD5 = Hash::Get($ID);
?>
```
