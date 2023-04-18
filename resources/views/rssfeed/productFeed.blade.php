<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
>
    <channel>
        <title>{{$data['product']->title}}</title>
        <link>https://mobiledokan.org/{{$data['product']->slug}}</link>
        <atom:link href="https://mobiledokan.org/{{$data['product']->slug}}/feed/" rel="self" type="application/rss+xml" />
        <language>en-US</language>
        <generator>Laravel 9.4 &amp; NodeJs 18.13</generator>


        <image>
            <url>{{URL::to('public',$data['product']->feature_image)}}</url>
            <title>{{$data['product']->title}}</title>
        </image>

        <description>
            <title>{{$data['product']->title}}</title>
            <details>
                {{$data['product']->description}}
            </details>
            <sy:updatePeriod>hourly	</sy:updatePeriod>
            <sy:updateFrequency>1</sy:updateFrequency>
            <latestPubDate>
                {{ $data['product']->updated_at }}
            </latestPubDate>
        </description>


    </channel>
</rss>
