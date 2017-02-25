<?php
declare(strict_types=1);

class Kata
{
    public function print_diamond(string $letter) : string
    {
        return implode(PHP_EOL, $this->diamond($letter));
    }

    private function diamond(string $letter) : array
    {
        if ('A' === $letter) {
            return [$letter];
        }

        $topDiamond = [];
        $bottomDiamond = [];

        $outerPaddingSize = $this->maxPadding($letter);
        $innerPaddingSize = -1;

        for ($l = 'A'; $l <= $letter; $l++) {
            if ('A' === $l) {
                $topDiamond[] = str_repeat(' ', $outerPaddingSize).$l;
                array_unshift($bottomDiamond, str_repeat(' ', $outerPaddingSize).$l);
            } else {
                if (1 === strlen($l)) {
                    $topDiamond[] = str_repeat(' ', $outerPaddingSize).$l.str_repeat(' ',
                            $innerPaddingSize).$l.str_repeat(' ', $outerPaddingSize);

                    if ($letter !== $l) {
                        array_unshift($bottomDiamond,
                            str_repeat(' ', $outerPaddingSize).$l.str_repeat(' ', $innerPaddingSize).$l.str_repeat(' ',
                                $outerPaddingSize));
                    }
                }
            }

            $outerPaddingSize--;
            $innerPaddingSize += 2;
        }

        return array_merge($topDiamond, $bottomDiamond);
    }

    private function maxPadding(string $letter) : int
    {
        $spaces = 0;

        for ($l = 'A'; $l < $letter; $l++) {
            $spaces++;
        }

        return $spaces;
    }
}
