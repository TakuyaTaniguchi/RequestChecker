import React from "react";
import { render } from "react-dom";
import axios from "axios";
import { Request } from "./components/request";
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
      <div>
        <Request request={this.request} />
      </div>
    );
  }

  request = (url) => {
    this.setState({ loading: true });
    axios
        .get('./../public/api/genelateJson.php')
        .then(res => {
        })
        .catch(error => {
          this.setState({ error: false });
        });
  };
}
render(<App />, document.getElementById("root"));
