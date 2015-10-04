<?php
/*
 * Copyright (C) 2015 Polaretto
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace App;

/**
 * This interface provides the abstract representation of the Character
 * 
 * @note Are still missing from the dump: uinf->kills, spells, creatures
 * 
 * @author Polaretto
 */
interface CharacterRepository {
    
    /**
     * Represents the minimum data needed to create a new character acceptable
     * by the game
     * 
     * @param string $name
     * @param int $level
     * @param Account $account
     * @param type $gender
     * @param CHR_CLASS $class
     * @param Race $race
     * @param int $money
     * @param int $honorPoints
     * @param int $arenaPoints
     * @param int $totalKills
     * @param int $talentSpecsCount
     */
    public function __construct(string $name, int $level, Account $account, 
            $gender, CHR_CLASS $class, Race $race, int $money = 0, int $honorPoints = 0, 
            int $arenaPoints = 0, int $totalKills = 0, int $talentSpecsCount = 0);
    
    /**
     * Gets the name of the character
     * 
     * @return string 
     */
    public function getName();
    
    /**
     * Gets the level of the character
     * 
     * @return string 
     */
    public function getLevel();
    
    /**
     * Assigns a level to the character
     * [1, 255]: values must be between 1 and 255 
     * 
     * @param int
     * @return void 
     */
    public function setLevel(int $level);
    
    /**
     * Gets the GENDER of the character
     * 
     * @return GENDER
     */
    public function getGender();
    
    /**
     * Gets the (WoW)Class of the character
     * 
     * @return WoWClass
     */
    public function getClass();
    
    /**
     * Gets the race of the character
     * 
     * @return Race
     */
    public function getRace();
    
    /**
     * Gets the amount of money of the character
     * 
     * @return int
     */
    public function getMoney();
    
    /**
     * Gives an amount of money to the character
     * 
     * @param int
     * @return void 
     */
    public function giveMoney(int $amount);
    
    /**
     * Gets the honor of the character
     * 
     * @return int
     */
    public function getHonor();
    
    /**
     * Assigns an amount of honor to the character
     * 
     * @param int
     * @return void 
     */
    public function assignHonor(int $amount);
    
    /**
     * Gets the arena points of the character
     * 
     * @return int
     */
    public function getArenaPoints();
    
    /**
     * Assigns an amount of arena points to the character
     * 
     * @param int
     * @return void 
     */
    public function assignArenaPoints(int $amount);
    
    /**
     * Gets character's Inventory
     * 
     * @return Illuminate\Support\Collection
     */
    public function getInventory();
    
    /**
     * Adds an Item to the character
     * 
     * @param Item
     * @return void
     */
    public function addItem(Item $item);
    
    /**
     * Gets character's Glyphs
     * 
     * @return Illuminate\Support\Collection
     */
    public function getGlyphs();
    
    /**
     * Adds a Glyph to the character
     * 
     * @param Glyph
     * @return void
     */
    public function addGlyph(Glyph $glyph);
    
    /**
     * Gets character's Skills
     * 
     * @return Illuminate\Support\Collection
     */
    public function getSkills();
    
    /**
     * Adds a skill to the character
     * 
     * @param SKILL
     * @return void
     */
    public function addSkill(SKILL $skill);
    
    /**
     * Gets character's Glyphs
     * 
     * @return Illuminate\Support\Collection
     */
    public function getReputations();
    
    /**
     * Adds a reputation with a specific faction to the character
     * 
     * @param Faction
     * @param int
     * @return void
     */
    public function addReputation(Faction $faction, int $reputation);
    
     /**
     * Gets character's Achievements
     * 
     * @return Illuminate\Support\Collection
     */
    public function getAchievements();
    
    /**
     * Adds an Achievement to the character
     * 
     * @param Achievement
     * @return void
     */
    public function addAchievement(Achievement $achievement);
    
     /**
     * Gets character's Skills
     * 
     * @return Illuminate\Support\Collection
     */
    public function getCurrencies();
    
    /**
     * Adds a skill to the character
     * 
     * @param CURRENCY
     * @param int
     * @return void
     */
    public function addCurrency(CURRENCY $currency, int $amount);
    
    /**
     * Gets character's learned specializations count
     * 
     * @return int
     */
    public function getSpecsCount();
    
    /**
     * Sets the number of character's learned specializations
     * 
     * @param int
     * @return void
     */
    public function setSpecsCount(int $specsNumber);
    
}
