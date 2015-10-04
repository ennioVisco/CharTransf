<?php
/*
 * Copyright (C) 2015 Ennio
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

use App\Models\Character as Character;

/**
 * This class is the implementation of the Character Repository as defined by
 * the TrinityCore's DBs and APIs.
 *
 * @author Polaretto
 */
class TrinityCoreCharacterRepository implements CharacterRepository{
    private $character;
    
    public function __construct(string $name, int $level, Account $account, $gender, CHR_CLASS $class, Race $race, int $money = 0, int $honorPoints = 0, int $arenaPoints = 0, int $totalKills = 0, int $talentSpecsCount = 0) {
        $this->character = new Character();
    }

    public function addAchievement(Achievement $achievement) {
        
    }

    public function addCurrency(CURRENCY $currency, $amount) {
        
    }

    public function addGlyph(Glyph $glyph) {
        
    }

    public function addItem(Item $item) {
        
    }

    public function addReputation(Faction $faction, $reputation) {
        
    }

    public function addSkill(SKILL $skill) {
        
    }

    public function assignArenaPoints($amount) {
        
    }

    public function assignHonor($amount) {
        
    }

    public function getAchievements() {
        
    }

    public function getArenaPoints() {
        
    }

    public function getClass() {
        
    }

    public function getCurrencies() {
        
    }

    public function getGender() {
        
    }

    public function getGlyphs() {
        
    }

    public function getHonor() {
        
    }

    public function getInventory() {
        
    }

    public function getLevel() {
        
    }

    public function getMoney() {
        
    }

    public function getName() {
        
    }

    public function getRace() {
        
    }

    public function getReputations() {
        
    }

    public function getSkills() {
        
    }

    public function getSpecsCount() {
        
    }

    public function giveMoney($amount) {
        
    }

    public function setLevel($level) {
        
    }

    public function setSpecsCount($specsNumber) {
        
    }

}
