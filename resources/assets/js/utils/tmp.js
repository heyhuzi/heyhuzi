/**
 * 搜索后关键词特殊标注
 */
renderTagedTitle(title, search) {
    let tagedTitle = [];
    let kwRegExp = new RegExp(`(${search})`, 'g');
    let kwList = [];
    let sp = Date.now();
    title = (title || '').replace(kwRegExp, (kw) => {
        kwList.push(kw);
        return sp;
    });

    title.split(sp).map((fragment, index) => {
        fragment && tagedTitle.push((
            <span>{fragment}</span>
        ));
        kwList[index] && tagedTitle.push((
            <span className="article-title-highlight">{kwList[index]}</span>
        ));
        return null;
    });

    return (<span>{tagedTitle}</span>);
}
