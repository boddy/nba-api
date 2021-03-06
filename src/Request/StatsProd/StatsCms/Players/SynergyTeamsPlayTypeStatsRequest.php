<?php

namespace JasonRoman\NbaApi\Request\StatsProd\StatsCms\Players;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\StatsProd\CategoryParam;
use JasonRoman\NbaApi\Params\StatsProd\LimitParam;
use JasonRoman\NbaApi\Params\StatsProd\NamesParam;
use JasonRoman\NbaApi\Params\StatsProd\SeasonParam;
use JasonRoman\NbaApi\Params\StatsProd\SeasonTypeParam;
use JasonRoman\NbaApi\Request\StatsProd\StatsCms\AbstractStatsProdStatsCmsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get teams synergy stats for a particular category.
 */
class SynergyTeamsPlayTypeStatsRequest extends AbstractStatsProdStatsCmsRequest
{
    const ENDPOINT = '/wp-json/statscms/v1/synergy/player/';

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(CategoryParam::OPTIONS)
     *
     * @var string
     */
    public $category;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = SeasonParam::SYNERGY_FIRST_YEAR)
     *
     * @var string
     */
    public $season;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(NamesParam::OPTIONS)
     *
     * @var string
     */
    public $names;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = LimitParam::MIN, max = LimitParam::MAX)
     *
     * @var string
     */
    public $limit;
}