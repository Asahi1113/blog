{{--@foreach($list as $val)--}}
<article>
	<header class="entry-header">
		<h1 class="entry-title"><a href="{{--{{ $val->getLinkUrl() }}--}}" title="{{--{{ $val->title }}--}}" rel="bookmark">PHP+Swoole的闭包写法{{--{{ $val->title }}--}}</a></h1>
	</header>

	{{--@if($val->thumb)
		<div class="entry-content">
			<img src="{{ $val->thumb }}" alt="{{ $val->title }}" width="700">
		</div>
	@endif--}}

	<div class="entry-content">
		<p>过去几年中，我们一直在使用、构建和宣传消息队列，我们认为它们是很令人敬畏的，这也不是什么秘密。我们相信对任何架构或应用来说，消息队列都是一个至关重要的组件，下面是十个理由:</p>
		<p><span id="more-401"></span></p>
		<p>1. 解耦</p>
		<p>在项目启动之初来预测将来项目会碰到什么需求，是极其困难的。消息队列在处理过程中间插入了一个隐含的、基于数据的接口层，两边的处理过程都要实现这一接口。这允许你独立的扩展或修改两边的处理过程，只要确保它们遵守同样的接口约束。</p>
		<p>2. 冗余</p>
		<p>有时在处理数据的时候处理过程会失败。除非数据被持久化，否则将永远丢失。消息队列把数据进行持久化直到它们已经被完全处理，通过这一方式规避了数据丢失风险。在被许多消息队列所采用的”插入-获取-删除”范式中，在把一个消息从队列中删除之前，需要你的处理过程明确的指出该消息已经被处理完毕，确保你的数据被安全的保存直到你使用完毕。</p>
		<p>3. 扩展性</p>
		<p>因为消息队列解耦了你的处理过程，所以增大消息入队和处理的频率是很容易的；只要另外增加处理过程即可。不需要改变代码、不需要调节参数。扩展就像调大电力按钮一样简单。</p>
		<p>4. 灵活性 &amp; 峰值处理能力</p>
		<p>当你的应用上了Hacker News的首页，你将发现访问流量攀升到一个不同寻常的水平。在访问量剧增的情况下，你的应用仍然需要继续发挥作用，但是这样的突发流量并不常见；如果为以能处理这类峰值访问为标准来投入资源随时待命无疑是巨大的浪费。使用消息队列能够使关键组件顶住增长的访问压力，而不是因为超出负荷的请求而完全崩溃。请查看我们<a href="//blog.iron.io/2012/06/spikability-applications-ability-to.html" target="_blank">关于峰值处理能力的博客文章</a>了解更多此方面的信息。</p>
		<p>5. 可恢复性</p>
		<p>当体系的一部分组件失效，不会影响到整个系统。消息队列降低了进程间的耦合度，所以即使一个处理消息的进程挂掉，加入队列中的消息仍然可以在系统恢复后被处理。而这种允许重试或者延后处理请求的能力通常是造就一个略感不便的用户和一个沮丧透顶的用户之间的区别。</p>
		<p>6. 送达保证</p>
		<p>消息队列提供的冗余机制保证了消息能被实际的处理，只要一个进程读取了该队列即可。在此基础上，IronMQ提供了一个”只送达一次”保证。无论有多少进程在从队列中领取数据，每一个消息只能被处理一次。这之所以成为可能，是因为获取一个消息只是”预定”了这个消息，暂时把它移出了队列。除非客户端明确的表示已经处理完了这个消息，否则这个消息会被放回队列中去，在一段可配置的时间之后可再次被处理。</p>
		<p>7.排序保证</p>
		<p>在许多情况下，数据处理的顺序都很重要。消息队列本来就是排序的，并且能保证数据会按照特定的顺序来处理。IronMO保证消息浆糊通过FIFO（先进先出）的顺序来处理，因此消息在队列中的位置就是从队列中检索他们的位置。</p>
		<p>8.缓冲</p>
		<p>在任何重要的系统中，都会有需要不同的处理时间的元素。例如,加载一张图片比应用过滤器花费更少的时间。消息队列通过一个缓冲层来帮助任务最高效率的执行–写入队列的处理会尽可能的快速，而不受从队列读的预备处理的约束。该缓冲有助于控制和优化数据流经过系统的速度。</p>
		<p>9. 理解数据流</p>
		<p>在一个分布式系统里，要得到一个关于用户操作会用多长时间及其原因的总体印象，是个巨大的挑战。消息系列通过消息被处理的频率，来方便的辅助确定那些表现不佳的处理过程或领域，这些地方的数据流都不够优化。</p>
		<p>10. 异步通信</p>
		<p>很多时候，你不想也不需要立即处理消息。消息队列提供了异步处理机制，允许你把一个消息放入队列，但并不立即处理它。你想向队列中放入多少消息就放多少，然后在你乐意的时候再去处理它们。</p>
		<p>我们相信上述十个原因，使得消息队列成为在进程或应用之间进行通信的最好形式。我们已经花费了一年时间来创建和学习IronMQ，我们的客户也通过消息队列完成了许多不可思议的事情。队列是创建强大的分布式应用的关键，它可以利用云技术所提供的所有强大能量。</p>
		<p>如果现在你想要开始使用一个高效的、可靠的、托管的消息队列，<a href="//iron.io/products/mq?rc=blog_mq_t10" target="_blank">下载IronMQ吧</a>。</p>
	</div>

	@include('index._tag'/*, ['val'=> $val]*/)
</article>
{{--@endforeach--}}
