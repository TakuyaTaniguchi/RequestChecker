import React from "react";
import { render } from "react-dom";
import axios from "axios";
import { Search } from "./components/serach";
import { css } from "emotion";
import "./styles.css";


const wrapperStyle = css({
});

const listStyle = css({
  fontSize: "14px",
  fontWeight: "bold",
  listStyle: "none",
});

const listStyle_li = css({
  display: "flex",
  justifyContent: "space-between",
  padding: "5px 0",
});

const listStyle_code = css({
  color: "skyblue"
})

const listStyle_link = css({
  color: "skyblue"
})

const col = css({
  width: "50%"
});

const ErrorStyle = css({
  color: "red"
});

const wrap = css({

});

const head = css({

});

const head_inner = css({
   width: "980px",
   margin: "0 auto"
});

const head_title = css({
   color: "skyblue"
});

const contents = css({
  width: "980px",
  margin: "0 auto"
});

const list = css({
  listStyle: "none"
});

const page = css({
  display: "flex",
  justifyContent: "space-between",
});

const code_200 = css({
    color : "pink"
});


class App extends React.Component {
  constructor() {
    super();
    this.state = {
      data:[],
      data_org: [],
      data_biz: [],
      error: "",
      loading: ''
    };
  }

  renderList(datas) {
    const list = datas.map((item,index) => {
      return (
        <li key={index} className={`${listStyle_li} code_${item.code}`}>
          <a href={item.url} target="_blank" rel="noreferrer noopener" className={listStyle_link}>
            {item.url}
          </a>
          <span className={listStyle_code}>{item.code}</span>
        </li>
      );
    });
    return <ul className={listStyle}>{list}</ul>;
  }
  error(error) {
    if (error === true) {
      return <p className={ErrorStyle}>検索結果がありません。</p>;
    }
  }
  load(loading){
    if(loading === true){
      return <p>ロード中...</p>
    }
  }

  render() {
    return (
      <div className={wrap}>
          <header className={head}>
            <div className={head_inner}>
              <h1 className={head_title}>Request oikaze DevelopSite</h1>
            </div>
          </header>
          <div className={contents}>
            <Search search={this.giphyApi} />
            <div className={page}>
              <div className={col}>
                <p>oikaze.org</p>
                <div>{this.renderList(this.state.data_org)}</div>
                <div>{this.error(this.state.error)}</div>
                <div>{this.load(this.state.loading)}</div>
              </div>
              <div className={col}>
                <p>oikaze.biz</p>
                <div>{this.renderList(this.state.data_biz)}</div>
                <div>{this.error(this.state.error)}</div>
                <div>{this.load(this.state.loading)}</div>
              </div>
            </div>
          </div>
      </div>
    );
  }

  giphyApi = () => {
    const url = `./api/data.json`;
    this.setState({ loading: true });
    axios
        .get(url)
        .then(res => {
          const { data } = res.data;
          this.setState({data_org: data.org });
          this.setState({data_biz: data.biz});
          this.setState({data: data});
          this.setState({ error: false });
          this.setState({ loading: false });
        })
        .catch(error => {
          this.setState({ error: false });
        });
  };
}
render(<App />, document.getElementById("root"));
