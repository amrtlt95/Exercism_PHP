<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {

        // - _Spy_: the group can be spied upon if **at least one** of them is **_awake_**. Otherwise, spying is a waste of time.


        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_prisoner_awake && !$is_archer_awake;


        // - _Signal prisoner_: the prisoner can be signalled using bird sounds if the **prisoner** is **_awake_** and the **archer** is **_sleeping_**, as archers are trained in bird signaling so they could intercept the message.

    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        return ($is_dog_present && !$is_archer_awake) || ( $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake);




//         - _Liberate prisoner_: Annalyn can try sneaking into the camp to free the prisoner.
//   This is a risky thing to do and can only succeed in one of two ways:
//   - If Annalyn has her pet dog with her she can rescue the prisoner if the **archer** is **_asleep_**.
//     The knight is scared of the dog and the archer will not have time to get ready before Annalyn and the prisoner can escape.



//   - If Annalyn does not have her dog then she and the prisoner must be very sneaky!
//     Annalyn can free the prisoner if the **prisoner** is **_awake_** and the **knight** and **archer** are both **_sleeping_**, but if the **prisoner** is **_sleeping_** they can't be rescued: the prisoner would be startled by Annalyn's sudden appearance and wake up the knight and archer.


    }
}
