import React from "react";
import { css } from "emotion";

const title_h2 = css({
  color: "hotpink",
  fontWeight: "bold"
});

const input = css({
  color: "skyblue",
  fontSize: "16px",
  border: "solid 1px",
  backgroundColor: "black",
  cursor: "pointer"
})

export class Search extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      title: ""
    };
  }
  render() {
    return (
      <div>
        <form onSubmit={this.handlesubmit}>
          <input className={input} onClick={this.handleChange} type="submit" value="Request" />
        </form>
      </div>
    );
  }
  handleChange = event => {
    const title = event.target.value;
    this.setState({ title: title });
  };
  handlesubmit = event => {
    event.preventDefault();
    this.props.search(this.state.title);
    this.setState({ title: "" });
  };
}
