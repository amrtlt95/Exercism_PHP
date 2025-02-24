<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) .".";
    }

    public function initials(string $name): string
    {
        $cleanName = trim($name);
        $nameArray = explode(" ",$cleanName);
        return $this->initial($nameArray[0]) ." " . $this->initial($nameArray[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        return <<< text
                   ******       ******
                 **      **   **      **
               **         ** **         **
              **            *            **
              **                         **
              **     {$this->initials($sweetheart_a)}  +  {$this->initials($sweetheart_b)}     **
               **                       **
                 **                   **
                   **               **
                     **           **
                       **       **
                         **   **
                           ***
                            *
              text;
    }
}
