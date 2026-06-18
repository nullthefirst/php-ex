<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return true ? !$is_knight_awake : false;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        $group = [$is_knight_awake, $is_archer_awake, $is_prisoner_awake];

        if (in_array(true, $group, true)) {
            return true;
        } else {
            return false;
        }
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return true ? $is_prisoner_awake && !$is_archer_awake : false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present) {
            if (!$is_archer_awake) {
                return true;
            }
        } else {
            if ($is_prisoner_awake) {
                if (!$is_archer_awake && !$is_knight_awake) {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
}
