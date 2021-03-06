<?php declare(strict_types = 1);

namespace JasonRoman\NbaApi\Params\Stats;

class LastNGamesParam extends AbstractStatsParam
{
    const MIN_ALL = 0;

    const MIN = 1;
    const MAX = 2147483647;

    /**
     * {@inheritdoc}
     * @return int
     */
    public static function getDefaultValue(): int
    {
        return self::MIN_ALL;
    }
}