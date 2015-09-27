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

/**
 * Description of Race
 *
 * @author Polaretto
 */
abstract class Race {
    /**
     * The Identifier of the race in the game
     * 
     * @var RACE 
     */
    public $ID;
    
    /**
     * The Identifier of the faction inside the game
     * 
     * @var FACTION 
     */
    public $Faction;
    
    public function __construct(RACE $race, FACTION $faction){
        $this->ID = $race;
        $this->Faction = $faction;
    }
    
    public abstract function isAllowedSpell(int $spellID);
    
}
