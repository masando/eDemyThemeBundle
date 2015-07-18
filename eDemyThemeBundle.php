<?php

namespace eDemy\ThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class eDemyThemeBundle extends Bundle
{
    public static function getBundleName($type = null)
    {
        if ($type == null) {

            return 'eDemyThemeBundle';
        } else {
            if ($type == 'Simple') {

                return 'Theme';
            } else {
                if ($type == 'simple') {

                    return 'theme';
                }
            }
        }
    }

    public static function eDemyBundle() {

        return false;
    }
}
