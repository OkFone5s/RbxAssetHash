<?php
namespace RbxAssetHash {
    class Hash {
        // MD5 Hash Generator with Prefix (ig if it makes it feel safer?)

        public static function Generate ($ID, $Prefix) {
            $ID = (int)$ID;
            return md5($Prefix.$ID);
        }

        // Store in JSON (IF YOUR USING A DATABASE FOR YOUR ASSETS PLEASE STORE IN DB)

        public static function Store ($ID, $MD5) {
            $ID = (int)$ID;
            $MD5 = (string)htmlspecialchars($MD5);

            $File = file_get_contents("../../../SaveAssetJson/assets.json");

            if ($File) {
                $json = json_decode($File);

                if ($json) {
                    $json[$ID] = $MD5;
                    $json = json_encode($json);

                    if ($json) {
                        $saved = file_put_contents("../../../SaveAssetJson/assets.json", $json);
                        return true;
                    }
                }
            }

            return false;
        }

        // Same rules with saving in DB, change this to DB support (I'll add DB support later)

        public static function Get ($ID) {
            $ID = (int)$ID;

            $File = file_get_contents("../../../SaveAssetJson/assets.json");

            if ($File) {
                $json = json_decode($File);

                if ($json) {
                    if ($json[$ID]) {
                        return $json[$ID];
                    }
                }
            }

            return null;
        }
    }
}