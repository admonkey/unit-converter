**Note** the distinction between a [Megabyte][1] and a [Mebibyte][2].

> The unit prefix mega is a multiplier of 1,000,000 (10<sup>6</sup>) in the
> [International System of Units (SI)][3]. Therefore, one megabyte is one
> million bytes of information. This definition has been incorporated
> into the [International System of Quantities][4].
> 
> However, in the computer and information technology fields, several
> other definitions are used that arose for historical reasons of
> convenience. A common usage has been to designate one megabyte as
> 1,048,576 bytes (2<sup>20</sup> B), a measurement that conveniently expresses the
> binary multiples inherent in digital computer memory architectures.

> **However, most standards bodies have deprecated this usage** in favor of
> a set of binary prefixes, in which this measurement is designated
> by the unit [mebibyte (MiB)][2].

> Less common is a measurement that used the
> megabyte to mean 1000×1024 (1,024,000) bytes.

Your question literally asks how to get the *"megabyte"* format but your example indicates a *mebibyte* format.

> What's the best way to format this size info to kilobytes, **megabytes**
> and gigabytes? For instance I have an MP3 that Ubuntu displays as "**5.2
> MB (5445632 bytes)**".

I realize a lot has happened since you first posted this question, but as of 2016, even Ubuntu has switched to using the SI unit of measure.

[![screenshot of ubuntu showing SI megabyte size usage][5]][5]

Of course I had never thought of any of this until reading some of the other wonderful answers here which led me to dig deeper, so I have combined much of your work and filled in the gaps where I found them.

* [ZWarren's comment][6] noting small `k` is for kilo while big `K` is for Kelvin
* [SpYk3HH's comment][7] for Yottabyte support
* using full precision 1,048,576 instead of rough 1,048,000


  [1]: https://en.wikipedia.org/wiki/Megabyte
  [2]: https://en.wikipedia.org/wiki/Mebibyte
  [3]: https://en.wikipedia.org/wiki/International_System_of_Units
  [4]: https://en.wikipedia.org/wiki/International_System_of_Quantities
  [5]: http://i.stack.imgur.com/YHLxh.png
  [6]: http://stackoverflow.com/questions/2510434/format-bytes-to-kilobytes-megabytes-gigabytes/18295950#comment30855243_18295950
  [7]: http://stackoverflow.com/questions/2510434/format-bytes-to-kilobytes-megabytes-gigabytes/2510540#comment30895564_2510540