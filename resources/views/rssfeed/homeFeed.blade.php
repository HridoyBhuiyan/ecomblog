<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title>Mobiledokan.org</title>
        <link>https://mobiledokan.org/</link>
        <description>
            <lastBuildDate>{{ date('Y-m-d', strtotime("-1 day")) }} 23:03:15 +0000</lastBuildDate>
            <language>en-US</language>

            <generator>Laravel 9.4 &amp; NodeJs 18.13</generator>
            <meta name="generator" content="Laravel {{ app()->version() }}" />
        </description>
        <latestPubDate>{{ $data['pubDate'] }}</latestPubDate>
        <image>
            <url>https://mobiledokan.org/public/storage/mobile%20dokan%20logo.webp</url>
            <title>MobileDokan.com</title>
            <link>https://mobiledokan.org</link>
            <width>797</width>
            <height>133</height>
        </image>


        @foreach($data['productList'] as $item)
                <item>
                    <title><![CDATA[{{$item['title']}}]]></title>
                    <link>{{$item['link']}}</link>
                    <description><![CDATA[{{$item['description']}}]]></description>
                    <category>{{$item['category']}}</category>
                    <author><![CDATA[Naim Hossain Rashik]]></author>
                    <guid>1</guid>
                    <pubDate>{{$item['create_date']}}</pubDate>
                </item>
        @endforeach
    </channel>
</rss>
