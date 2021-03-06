<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Player;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\PlayerIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Params\Stats\MeasureTypeParam;
use JasonRoman\NbaApi\Params\Stats\PerModeParam;
use JasonRoman\NbaApi\Params\Stats\SeasonTypeParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

class PlayerFantasyProfileRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/playerfantasyprofile';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(MeasureTypeParam::OPTIONS_BASE)
     *
     * @var string
     */
    public $measureType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PerModeParam::OPTIONS_TOTALS_PER_GAME_PER_36)
     *
     * @var string
     */
    public $perMode;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $plusMinus;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $paceAdjust;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $rank;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LeagueIdParam::OPTIONS_NBA_G_LEAGUE)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $season;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId;
}